.. index::
   single: References

##########
References
##########

The single most important concept to understand about this client is how it
handles **references**. ESPN's API is hypermedia-driven: almost every resource
links to related resources through a ``$ref`` URL rather than embedding them.
This client embraces that model rather than hiding it.

.. contents:: Table of contents
   :depth: 2
   :local:

******************
The ``$ref`` model
******************

A typical ESPN resource embeds links like this:

.. code-block:: json

    {
        "id": "2578570",
        "fullName": "Jacoby Brissett",
        "position": {
            "$ref": "http://sports.core.api.espn.com/v2/.../positions/8?lang=en"
        },
        "team": {
            "$ref": "http://sports.core.api.espn.com/v2/.../teams/22?lang=en"
        }
    }

Even though ESPN nests a ``position`` object here, the only meaningful content
is the ``$ref`` link. The client therefore does **not** map the nested object.
Instead it captures the link as a string property.

***********************
The naming convention
***********************

The client relies on a strict property naming convention to capture links:

* A single ``$ref`` sub-object named ``foo`` is stored in a string property
  ``fooReference``.
* An array of ``$ref`` sub-objects named ``foo`` is stored in an array
  property ``fooReferences``.

So the JSON above populates:

.. code-block:: php

    $athlete->getPositionReference();
    // "http://sports.core.api.espn.com/v2/.../positions/8?lang=en"

    $athlete->getTeamReference();
    // "http://sports.core.api.espn.com/v2/.../teams/22?lang=en"

And an athlete's list of injury links populates:

.. code-block:: php

    $athlete->getInjuriesReferences();
    // [
    //   "http://sports.core.api.espn.com/v2/.../injuries/123?lang=en",
    //   "http://sports.core.api.espn.com/v2/.../injuries/456?lang=en",
    // ]

.. note::

    This is why DTOs never contain nested "child" objects for linked
    resources. A property called ``positionReference`` is a deliberate signal
    that the value is a link you can resolve, not embedded data. Embedded
    *value objects* (an address, a status) that are genuinely part of the
    parent resource are still mapped as nested DTOs — only ``$ref`` links
    become reference strings.

******************
The reference normalizer
******************

Capturing ``{name}Reference`` and ``{name}References`` from arbitrary ``$ref``
sub-objects is not something the stock Symfony serializer does on its own. A
custom normalizer performs this mapping during deserialization: it inspects
each sub-object, detects a ``$ref`` key, and writes the link into the matching
reference property.

When you wire the client (see :doc:`installation`), register this normalizer
alongside the standard ones so reference properties are populated. Without it,
scalar fields will still deserialize correctly, but reference properties will
remain ``null``.

.. note::

    The reference normalizer is the one piece of serializer configuration the
    client genuinely depends on. If you find that ``getXxxReference()`` always
    returns ``null`` even though the raw JSON clearly contains a ``$ref``, a
    missing or unregistered normalizer is almost always the cause.

******************
Resolving a reference
******************

A reference is just a fully-qualified ESPN URL, so you can resolve it directly
through the client's low-level ``get()`` method by turning the string into a
``UriInterface`` and naming the DTO class you expect:

.. code-block:: php

    use HansPeterOrding\EspnApiClient\Dto\EspnPosition;

    $ref = $athlete->getPositionReference();

    $position = $client->get(
        $client->getUriFactory()->createUri($ref),
        EspnPosition::class
    );

    echo $position->getDisplayName();   // "Quarterback"

The same approach resolves every reference, whether it came from a DTO
property or from a ``listRefs*`` call:

.. code-block:: php

    use HansPeterOrding\EspnApiClient\Dto\EspnAthlete;

    $athleteRefs = $client->seasons()->athletes()->listRefsForTeam(2025, 12);

    foreach ($athleteRefs as $ref) {
        $athlete = $client->get(
            $client->getUriFactory()->createUri($ref),
            EspnAthlete::class
        );

        echo $athlete->getFullName() . PHP_EOL;
    }

******************
Why references instead of eager loading?
******************

Resolving every link eagerly would turn a single athlete fetch into dozens of
cascading HTTP requests (position, team, college, contracts, statistics,
projections, event log …). By keeping links as strings, the client lets *you*
decide exactly which related resources are worth a round trip. This keeps the
client fast, predictable, and free of hidden network traffic.

**********
Read next
**********

* :doc:`error_handling` — how failed requests surface as exceptions
* :doc:`extending` — adding endpoints or customizing serialization
