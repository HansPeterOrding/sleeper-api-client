.. index::
   single: EspnApiClient

##############
EspnApiClient
##############

``EspnApiClient`` is a lightweight, framework-agnostic PHP client for the
public ESPN NFL data API. It wraps the ESPN *sports core* and *site* APIs
behind a small, strongly-typed, fluent interface and maps every response onto
plain PHP data transfer objects (DTOs).

The client has no opinion about how you persist or process the data it returns.
It only does three things:

#. Build the correct ESPN URL for the resource you ask for.
#. Perform the HTTP request through any `PSR-18`_ HTTP client.
#. Deserialize the JSON response into a typed DTO (or a list of references).

If you are looking for Doctrine entities, an import pipeline, or Symfony
Messenger integration, those live in the companion package
``espn-api-symfony-bundle``, which builds on top of this client.

.. contents:: Table of contents
   :depth: 2
   :local:

************
At a glance
************

.. code-block:: php

    use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClient;

    // $client is an EspnApiClient instance (see "Installation")
    $season = $client->seasons()->get(2025);

    echo $season->getDisplayName();      // "2025"
    echo $season->getStartDate();        // "2025-08-01T07:00Z"

    // Fluent, chainable endpoint access mirrors the ESPN URL hierarchy
    $athlete = $client->seasons()->athletes()->get(2025, 2578570);

    echo $athlete->getFullName();        // "Jacoby Brissett"
    echo $athlete->getJersey();          // "7"

************
Key concepts
************

The client is built around four ideas. Understanding them up front makes the
rest of the documentation straightforward.

**Endpoints are fluent and mirror the ESPN URL hierarchy.**
The ESPN API is deeply nested (a season has athletes, an event has
competitions, a competition has competitors). The client exposes the same
hierarchy through chained method calls such as
``$client->events()->competitions()->competitors()->get(...)``. See
:doc:`endpoints`.

**Responses become typed DTOs.**
Every "get" call returns a single DTO object with nullable, typed getters.
Listing calls return arrays of *reference strings* (URLs) rather than nested
objects. See :doc:`dtos` and :doc:`references`.

**Sub-objects that contain a ``$ref`` are stored as references, not objects.**
ESPN embeds links to related resources everywhere. The client never inlines
those related objects into a DTO; instead it keeps the link as a string
property so you can fetch the related resource on demand. See
:doc:`references`.

**HTTP is delegated to PSR-18.**
The client never talks to cURL directly. You inject any PSR-18 client,
PSR-17 factories, and a Symfony serializer, or let auto-discovery wire them
for you. See :doc:`installation`.

**********
Read next
**********

.. toctree::
    :maxdepth: 1

    installation
    endpoints
    dtos
    references
    error_handling
    extending
    contribute

.. _PSR-18: https://www.php-fig.org/psr/psr-18/
