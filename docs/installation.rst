.. index::
   single: Installation

############
Installation
############

.. contents:: Table of contents
   :depth: 2
   :local:

*************
Requirements
*************

* PHP 8.3 or higher
* A `PSR-18`_ HTTP client and `PSR-17`_ HTTP factories
* ``symfony/serializer`` for JSON (de)serialization

************
Via Composer
************

Install the client with Composer:

.. code-block:: terminal

    $ composer require hanspeterording/espn-api-client

The client depends on a PSR-18 HTTP client and PSR-17 factories, but it does
not ship a concrete implementation, so you are free to choose your own. If you
do not have one yet, the two most common options are shown below.

******************
Wiring the client
******************

``EspnApiClient`` has four constructor dependencies:

============================================ ===========================================
Dependency                                   Responsibility
============================================ ===========================================
``Psr\Http\Client\ClientInterface``          Sends the HTTP request (PSR-18)
``Psr\Http\Message\UriFactoryInterface``     Builds request URIs (PSR-17)
``Psr\Http\Message\RequestFactoryInterface`` Builds request objects (PSR-17)
``Symfony\...\SerializerInterface``          Maps JSON onto DTOs
============================================ ===========================================

You can satisfy these dependencies in two ways.

Option 1: Auto-discovery (zero configuration)
=============================================

The easiest way to get started is to let `HTTPlug discovery`_ find whatever
PSR-18 client and PSR-17 factories are already installed in your project. This
is ideal for quick scripts, tests, or when you simply do not want to think
about which implementation is used.

First install the discovery helper and any PSR-18 client (Guzzle is used here
purely as an example — any PSR-18 implementation works):

.. code-block:: terminal

    $ composer require php-http/discovery guzzlehttp/guzzle

Then build the client without naming any concrete implementation:

.. code-block:: php

    use Http\Discovery\Psr17FactoryDiscovery;
    use Http\Discovery\Psr18ClientDiscovery;
    use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClient;
    use Symfony\Component\Serializer\Serializer;
    use Symfony\Component\Serializer\Encoder\JsonEncoder;
    use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
    use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

    $serializer = new Serializer(
        [new ArrayDenormalizer(), new ObjectNormalizer()],
        [new JsonEncoder()],
    );

    $client = new EspnApiClient(
        Psr18ClientDiscovery::find(),
        Psr17FactoryDiscovery::findUriFactory(),
        Psr17FactoryDiscovery::findRequestFactory(),
        $serializer,
    );

Option 2: Explicit wiring with Symfony HttpClient
=================================================

If you prefer to be explicit about which implementation is used — for example
to configure timeouts, retries, or a proxy — wire the dependencies yourself.
``symfony/http-client`` provides both a PSR-18 client and PSR-17 factories
through ``Psr18Client``:

.. code-block:: terminal

    $ composer require symfony/http-client nyholm/psr7

.. code-block:: php

    use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClient;
    use Symfony\Component\HttpClient\Psr18Client;
    use Symfony\Component\Serializer\Serializer;
    use Symfony\Component\Serializer\Encoder\JsonEncoder;
    use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
    use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

    // Psr18Client implements ClientInterface, UriFactoryInterface
    // and RequestFactoryInterface at once.
    $psr18 = new Psr18Client();

    $serializer = new Serializer(
        [new ArrayDenormalizer(), new ObjectNormalizer()],
        [new JsonEncoder()],
    );

    $client = new EspnApiClient(
        $psr18,
        $psr18,
        $psr18,
        $serializer,
    );

.. note::

    The DTOs use a property naming convention (``{name}Reference`` /
    ``{name}References``) to capture ESPN ``$ref`` links. To populate those
    automatically you need to register the reference normalizer described in
    :doc:`references`. The bare serializer shown above will still work, but
    reference properties will only be filled if the normalizer is present.

*****************
Using the client
*****************

Once constructed, the client is immutable and reusable. Inject it wherever you
need ESPN data and call the fluent endpoint methods:

.. code-block:: php

    $teams = $client->seasons()->teams();
    $team  = $teams->get(2025, 12);

    echo $team->getDisplayName();   // "Kansas City Chiefs"

Continue with :doc:`endpoints` to learn how the endpoint hierarchy is
organized.

.. _PSR-18: https://www.php-fig.org/psr/psr-18/
.. _PSR-17: https://www.php-fig.org/psr/psr-17/
.. _HTTPlug discovery: https://docs.php-http.org/en/latest/discovery.html
