.. index::
   single: DTOs

####
DTOs
####

Every ``get*`` call returns a *data transfer object* (DTO): a plain,
immutable-by-convention PHP object that mirrors one ESPN resource. DTOs live
in the ``HansPeterOrding\EspnApiClient\Dto`` namespace.

.. contents:: Table of contents
   :depth: 2
   :local:

*************
Anatomy of a DTO
*************

DTOs follow a deliberately boring, predictable shape so they are easy to
consume and easy to reason about:

* Every property is **private** and **nullable**, with a typed getter and a
  fluent setter.
* Scalar fields (``id``, ``displayName``, ``jersey`` …) map directly to the
  corresponding ESPN JSON field.
* Embedded value objects (such as an address or a status) are mapped as nested
  DTOs.
* Links to *other* resources are **not** mapped as objects — they are stored
  as reference strings. See :doc:`references`.

.. code-block:: php

    use HansPeterOrding\EspnApiClient\Dto\EspnAthlete;

    $athlete = $client->seasons()->athletes()->get(2025, 2578570);

    // Scalar getters
    $athlete->getFullName();    // "Jacoby Brissett"
    $athlete->getJersey();      // "7"
    $athlete->getAge();         // 33

    // Embedded value object
    $athlete->getBirthPlace()->getCity();   // "West Palm Beach"

    // Reference to a related resource (a string, not an object)
    $athlete->getPositionReference();
    // "http://sports.core.api.espn.com/v2/.../positions/8?lang=en&region=us"

***************
Nullability
***************

Because ESPN is inconsistent about which fields appear for which resources,
**every** getter can return ``null``. Always treat DTO values as optional:

.. code-block:: php

    $weight = $athlete->getWeight();   // ?string

    if (null !== $weight) {
        // safe to use
    }

This is intentional. The client never invents default values or throws on a
missing field; it faithfully represents whatever ESPN returned.

***********************
Numeric values as strings
***********************

Some ESPN fields are documented as text but are sometimes delivered as JSON
numbers (for example an athlete's ``weight`` or a competition clock). Those
DTO properties are typed as ``?string`` and carry a serializer context that
disables strict type enforcement, so a numeric ``235.0`` is accepted into a
string property without error. From your perspective the getter simply
returns a string:

.. code-block:: php

    $athlete->getWeight();   // "235" — even though ESPN sent 235.0

You never need to configure this; it is baked into the affected DTOs.

***************
Lists of values
***************

Where ESPN returns a homogeneous list of scalar-ish items (such as an
athlete's links), the DTO exposes it as a typed array:

.. code-block:: php

    foreach ($athlete->getLinks() as $link) {
        echo $link->getHref();
    }

Lists of *references* to other resources are exposed as arrays of strings —
see :doc:`references`.

***************
Mutating DTOs
***************

DTOs are technically mutable (every property has a fluent setter), but they
are intended to be read, not written. The setters exist so the serializer can
populate them. Treat a DTO you received from the client as a read-only view of
ESPN data.

.. code-block:: php

    // Setters return $this for fluent population, but you rarely call them yourself
    $athlete->setJersey('12')->setAge(34);

**********
Read next
**********

* :doc:`references` — how reference strings work and how to resolve them
* :doc:`error_handling` — what happens when a request fails
