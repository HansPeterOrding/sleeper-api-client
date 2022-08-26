<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDepthChart;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerList;
use HansPeterOrding\SleeperApiClient\Dto\SleeperResearchPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperTrendingPlayer;

class Player extends AbstractEndpoint
{
    /**
     * @return SleeperPlayer[]
     */
    public function list(): array
    {
        $uri = $this->uri(
            sprintf(
                'players/%s',
                $this->sleeperApiClient->getSport()
            )
        );

        return $this->sleeperApiClient->get(
            $uri,
            SleeperPlayer::class . '[]'
        );
    }

    /**
     * @return SleeperTrendingPlayer[]
     */
    public function trending(
        string $type = AbstractEndpoint::TRENDING_TYPE_ADD,
        int    $lookBackHours = 24,
        int    $limit = 25
    ): array
    {
        $uri = $this->uri(
            sprintf(
                'players/%s/trending/%s',
                $this->sleeperApiClient->getSport(),
                $type
            ), [
                'lookback_hours' => $lookBackHours,
                'limit' => $limit
            ]
        );

        return $this->sleeperApiClient->get(
            $uri,
            SleeperTrendingPlayer::class . '[]'
        );
    }

    /**
     * @return SleeperResearchPlayer[]
     */
    public function research(
        int    $season,
        string $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR,
        ?int   $week = null
    ): array
    {
        $uri = $this->uri(
            sprintf(
                'players/%s/research/%s/%s%s',
                $this->sleeperApiClient->getSport(),
                $seasonType,
                $season,
                $week ?: ''
            ),
            [],
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $uri,
            SleeperResearchPlayer::class . '[]'
        );
    }

    public function get(
        int $playerId
    ): ?SleeperPlayer
    {
        $url = $this->uri(
            sprintf(
                'players/%s/%s',
                $this->sleeperApiClient->getSport(),
                $playerId
            ),
            [],
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayer::class
        );
    }

    public function depthChart(string $teamAbbreviation): ?SleeperDepthChart
    {
        $url = $this->uri(
            sprintf(
                'players/%s/%s/depth_chart',
                $this->sleeperApiClient->getSport(),
                $teamAbbreviation
            ),
            [],
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDepthChart::class
        );
    }
}
