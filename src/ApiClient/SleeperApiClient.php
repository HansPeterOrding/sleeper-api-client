<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient;

use HansPeterOrding\SleeperApiClient\ApiClient\Endpoints\Players;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\BadRequestException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ClientErrorException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ForbiddenException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\NotFoundException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\ServerErrorException;
use HansPeterOrding\SleeperApiClient\ApiClient\Exception\UnauthorizedException;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Serializer\SerializerInterface;

class SleeperApiClient implements SleeperApiClientInterface
{
    protected string $baseUri;

    protected ClientInterface $client;

    protected UriFactoryInterface $uriFactory;

    protected RequestFactoryInterface $requestFactory;

    protected SerializerInterface $serializer;

    private string $sports;

    public function __construct(
        string                  $baseUri,
        string                  $sports,
        ClientInterface         $client,
        UriFactoryInterface     $uriFactory,
        RequestFactoryInterface $requestFactory,
        SerializerInterface     $serializer
    )
    {
        $this->baseUri = $baseUri;
        $this->sports = $sports;
        $this->client = $client;
        $this->uriFactory = $uriFactory;
        $this->requestFactory = $requestFactory;
        $this->serializer = $serializer;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function getSports(): string
    {
        return $this->sports;
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

    public function get(UriInterface $uri, ?string $return = null)
    {
        $request = $this->requestFactory->createRequest('GET', $uri);

        $response = $this->client->sendRequest($request);

        $this->handleResponseCode($request, $response);

        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
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
            throw ClientErrorException::create($request, $response);
        }

        if ($response->getStatusCode() >= 500 && $response->getStatusCode() <= 599) {
            throw ServerErrorException::create($request, $response);
        }
    }

    public function players()
    {
        return new Players($this);
    }
}