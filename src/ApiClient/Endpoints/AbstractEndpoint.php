<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use Psr\Http\Message\UriInterface;

abstract class AbstractEndpoint
{
    protected SleeperApiClientInterface $sleeperApiClient;

    public function __construct(
        SleeperApiClientInterface $sleeperApiClient
    ) {
        $this->sleeperApiClient = $sleeperApiClient;
    }

    public function uri(string $path, $attributes = []): UriInterface
    {
        $uri = $this->sleeperApiClient->getBaseUri() . $path;
        if($attributes) {
            $uri .= http_build_query($attributes);
        }

        return $this->sleeperApiClient->getUriFactory()->createUri($uri);
    }
}