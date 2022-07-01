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
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\BadRequestException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ClientErrorException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ForbiddenException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\NotFoundException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ServerErrorException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\UnauthorizedException;
use MongoDB\BSON\Timestamp;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class SleeperApiClient implements SleeperApiClientInterface
{
    protected ClientInterface $client;

    protected UriFactoryInterface $uriFactory;

    protected RequestFactoryInterface $requestFactory;

    protected SerializerInterface $serializer;

    private string $sport;

    public function __construct(
        string                  $sport,
        ClientInterface         $client,
        UriFactoryInterface     $uriFactory,
        RequestFactoryInterface $requestFactory,
        SerializerInterface     $serializer
    )
    {
        $this->sport = $sport;
        $this->client = $client;
        $this->uriFactory = $uriFactory;
        $this->requestFactory = $requestFactory;
        $this->serializer = $serializer;
    }

    public function getSport(): string
    {
        return $this->sport;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function getUriFactory(): UriFactoryInterface
    {
        return $this->uriFactory;
    }

    public function getRequestFactory(): RequestFactoryInterface
    {
        return $this->requestFactory;
    }

    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * @param callable[] $jsonManipulationCallables
     */
    public function get(UriInterface $uri, ?string $return = null)
    {
        $request = $this->requestFactory->createRequest('GET', $uri);
        $response = $this->client->sendRequest($request);
        $this->handleResponseCode($request, $response);

        $contents = $response->getBody()->getContents();

        return $this->serializer->deserialize(
            $contents,
            $return,
            'json'
        );
    }

    private function handleResponseCode(RequestInterface $request, ResponseInterface $response)
    {
        if (400 === $response->getStatusCode()) {
            throw BadRequestException::create($request, $response);
        }

        if (401 === $response->getStatusCode()) {
            throw UnauthorizedException::create($request, $response);
        }

        if (403 === $response->getStatusCode()) {
            throw ForbiddenException::create($request, $response);
        }

        if (404 === $response->getStatusCode()) {
            throw NotFoundException::create($request, $response);
        }

        if ($response->getStatusCode() >= 400 && $response->getStatusCode() <= 499) {
            dump($response);
            dump($response->getBody()->getContents());
            throw ClientErrorException::create($request, $response);
        }

        if ($response->getStatusCode() >= 500 && $response->getStatusCode() <= 599) {
            throw ServerErrorException::create($request, $response);
        }
    }

    public function nflState(): NflState
    {
        return new NflState($this);
    }

    public function scheduleMatchup(): ScheduleMatchup
    {
        return new ScheduleMatchup($this);
    }

    public function player(): Player
    {
        return new Player($this);
    }

    public function league(): League
    {
        return new League($this);
    }

    public function user(): User
    {
        return new User($this);
    }

    public function draft(): Draft
    {
        return new Draft($this);
    }

    public function projections(): Projections
    {
        return new Projections($this);
    }

    public function stats(): Stats
    {
        return new Stats($this);
    }
}
