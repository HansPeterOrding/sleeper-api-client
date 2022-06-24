<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient;

use Http\Client\Common\Plugin\ContentTypePlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class SleeperApiClientFactory
{
    public const BASE_URI = 'https://api.sleeper.app/';
    public const SPORTS_NFL = 'nfl';

    public function getSleeperApiClient(
        string $sports = self::SPORTS_NFL,
        ?ClientInterface $client = null,
        ?LoggerInterface $logger = null
    ): SleeperApiClient {
        $client = $client ?? Psr18ClientDiscovery::find();
        $uriFactory = Psr17FactoryDiscovery::findUriFactory();
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();

        $plugins = [];

        if(null !== $logger) {
            $plugins[] = new LoggerPlugin($logger, new FullHttpMessageFormatter(5000));
        }

        $plugins[] = new ContentTypePlugin();
        $plugins[] = new HeaderDefaultsPlugin([
            'Accept' => '',
            'User-Agent' => ''
        ]);

        $pluginClient = new PluginClient(
            $client,
            $plugins
        );

        /**
         * @todo: configure serializer
         */
        $serializer = new Serializer();

        return new SleeperApiClient(self::BASE_URI, $sports, $pluginClient, $uriFactory, $requestFactory, $serializer);
    }
}
