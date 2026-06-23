.. index::
   single: Extending

#########
Extending
#########

The client is intentionally small and open. This page shows the three most
common ways developers extend it: adding a new endpoint, adding a new DTO, and
customizing serialization.

.. contents:: Table of contents
   :depth: 2
   :local:

******************
Adding a new endpoint
******************

Every endpoint extends ``AbstractEndpoint``, which provides two helpers:

* ``uri(string $path, array $attributes = [], string $baseUri = ...)`` builds a
  ``UriInterface`` from a path template and optional query parameters.
* ``extractRefs(array $data)`` pulls the ``$ref`` links out of a list
  envelope's ``items`` array.

A minimal endpoint looks like this:

.. code-block:: php

    namespace HansPeterOrding\EspnApiClient\ApiClient\Endpoints;

    use HansPeterOrding\EspnApiClient\Dto\EspnSeason;

    class EspnSeasons extends AbstractEndpoint
    {
        const URL_TEMPLATE_SEASONS = 'seasons';
        const URL_TEMPLATE_SEASON  = 'seasons/%d';

        public function get(int $year): ?EspnSeason
        {
            $url = $this->uri(sprintf(self::URL_TEMPLATE_SEASON, $year));

            return $this->espnApiClient->get($url, EspnSeason::class);
        }

        public function listRefs(): array
        {
            $url  = $this->uri(self::URL_TEMPLATE_SEASONS, ['limit' => 100]);
            $data = $this->espnApiClient->decodeJson($url);

            return $this->extractRefs($data);
        }
    }

To make a *child* endpoint reachable, add an accessor method that constructs
it with the same client instance:

.. code-block:: php

    public function teams(): EspnTeams
    {
        return new EspnTeams($this->espnApiClient);
    }

To expose a brand-new top-level endpoint, add an accessor to ``EspnApiClient``
(and its interface):

.. code-block:: php

    public function myResource(): EspnMyResource
    {
        return new EspnMyResource($this);
    }

******************
Building URLs
******************

``uri()`` accepts query parameters as an array. List parameters are
automatically collapsed into the ``key[]=`` form ESPN expects:

.. code-block:: php

    // seasons?limit=100
    $this->uri('seasons', ['limit' => 100]);

    // a path on the "site" API instead of the default "sports core" API
    $this->uri('teams', [], EspnApiClientInterface::BASE_URI_SITE);

******************
Adding a new DTO
******************

A DTO is a plain class with nullable private properties and fluent
getters/setters. Follow the existing convention so the serializer and the
reference normalizer behave predictably:

.. code-block:: php

    namespace HansPeterOrding\EspnApiClient\Dto;

    final class EspnMyResource
    {
        private ?string $id = null;
        private ?string $displayName = null;

        // A link to another resource — note the "Reference" suffix
        private ?string $venueReference = null;

        public function getId(): ?string { return $this->id; }
        public function setId(?string $id): static { $this->id = $id; return $this; }

        public function getDisplayName(): ?string { return $this->displayName; }
        public function setDisplayName(?string $v): static { $this->displayName = $v; return $this; }

        public function getVenueReference(): ?string { return $this->venueReference; }
        public function setVenueReference(?string $v): static { $this->venueReference = $v; return $this; }
    }

Remember the rules from :doc:`references`:

* A linked sub-object named ``venue`` → property ``venueReference``.
* An array of linked sub-objects named ``venue`` → property
  ``venueReferences`` (typed ``array``).

******************
Numeric-as-string fields
******************

If ESPN delivers a field as a JSON number but you want to store it as a
string, disable type enforcement for that property so the serializer accepts
the number:

.. code-block:: php

    use Symfony\Component\Serializer\Attribute\Context;
    use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

    #[Context(denormalizationContext: [
        AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
    ])]
    private ?string $value = null;

This is the same mechanism the built-in DTOs use for fields like ``weight``,
``clock`` and ``value``.

******************
Customizing serialization
******************

The client accepts any ``Symfony\Component\Serializer\SerializerInterface``,
so you control exactly which normalizers and encoders are in play. To add
behavior — a custom date handler, an extra normalizer, metadata-driven name
conversion — build the serializer with the normalizers you need and pass it to
``EspnApiClient``. The client only ever calls ``deserialize``, ``decode`` and
``denormalize`` on it, so any standards-compliant serializer configuration
works.

**********
Read next
**********

* :doc:`contribute` — how to contribute changes upstream
