<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient;

use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\Draft;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\League;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\NflState;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\Player;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\Projections;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\ScheduleMatchup;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\Stats;
use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\User;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

interface SleeperApiClientInterface
{
    public const BASE_URI_APP = 'https://api.sleeper.app/v1/';
    public const BASE_URI_COM = 'https://api.sleeper.com/';
    public const CONTENT_TYPE_JSON = 'application/json';

    public const ACCEPT_JSON = self::CONTENT_TYPE_JSON;

    public const USER_AGENT = 'SleeperApiClient 1.0';

    public function getSport(): string;

    public function getClient(): ClientInterface;

    public function getUriFactory(): UriFactoryInterface;

    public function getRequestFactory(): RequestFactoryInterface;

    public function getSerializer(): SerializerInterface;

    /**
     * @param callable[] $jsonManipulationCallables
     */
    public function get(UriInterface $uri, ?string $return = null);

    public function nflState(): NflState;

    public function scheduleMatchup(): ScheduleMatchup;

    public function player(): Player;

    public function league(): League;

    public function user(): User;

    public function draft(): Draft;

    public function projections(): Projections;

    public function stats(): Stats;
}
