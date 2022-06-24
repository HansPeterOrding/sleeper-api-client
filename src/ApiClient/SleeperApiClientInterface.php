<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

interface SleeperApiClientInterface
{
    public const CONTENT_TYPE_JSON = 'application/json';

    public const ACCEPT_JSON = self::CONTENT_TYPE_JSON;

    public const USER_AGENT = 'SleeperApiClient 1.0';

    public function getBaseUri(): string;

    public function getSports(): string;

    public function getClient(): ClientInterface;

    public function getUriFactory(): UriFactoryInterface;

    public function getRequestFactory(): RequestFactoryInterface;

    public function getSerializer(): SerializerInterface;

    public function get(UriInterface $uri, ?string $return = null);

    /**
     * @todo: define endpoints
     * public function players(): Players
     */
}