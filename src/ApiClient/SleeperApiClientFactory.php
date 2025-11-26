<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient;

use HansPeterOrding\SleeperApiClient\ApiClient\Denormalizers\SleeperRosterMetadataDenormalizer;
use Http\Client\Common\Plugin\ContentTypePlugin;
use Http\Client\Common\Plugin\CookiePlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\Plugin\RetryPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\CookieJar;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class SleeperApiClientFactory
{
    public const SPORTS_NFL = 'nfl';

    public function getSleeperApiClient(
        string           $sport = self::SPORTS_NFL,
        ?ClientInterface $client = null,
        ?LoggerInterface $logger = null
    ): SleeperApiClient {
        $client = $client ?? Psr18ClientDiscovery::find();
        $uriFactory = Psr17FactoryDiscovery::findUriFactory();
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();

        $plugins = $this->getPlugins($logger);

        $pluginClient = new PluginClient(
            $client,
            $plugins
        );

        $encoders = [new JsonEncoder()];
        $normalizers = $this->getNormalizers();

        $serializer = new Serializer($normalizers, $encoders);

        return new SleeperApiClient($sport, $pluginClient, $uriFactory, $requestFactory, $serializer);
    }

    private function getPlugins(?LoggerInterface $logger = null): iterable
    {
        $plugins = [];

        if(null !== $logger) {
            $plugins[] = new LoggerPlugin($logger, new FullHttpMessageFormatter(5000));
        }

        $plugins[] = new ContentTypePlugin();
        $plugins[] = new HeaderDefaultsPlugin([
            'Accept' => SleeperApiClientInterface::ACCEPT_JSON,
            'User-Agent' => SleeperApiClientInterface::USER_AGENT
        ]);
        $plugins[] = new RetryPlugin([
            'retries' => 3
        ]);

        return $plugins;
    }

    private function getNormalizers()
    {
        $metadataDenormalizer = new SleeperRosterMetadataDenormalizer();

        return [
            $metadataDenormalizer,
            new DateTimeNormalizer(),
            new ObjectNormalizer(
                null,
                new CamelCaseToSnakeCaseNameConverter(),
                null,
                new ReflectionExtractor()
            ),
            new ArrayDenormalizer()
        ];
    }
}
