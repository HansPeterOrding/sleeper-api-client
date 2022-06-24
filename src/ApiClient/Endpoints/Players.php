<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerList;

class Players extends AbstractEndpoint
{
    public const TRENDING_TYPE_ADD = 'add';
    public const TRENDING_TYPE_DROP = 'drop';

    public function list(string $sports = 'nfl'): SleeperPlayerList
    {
        $uri = $this->uri(
            sprintf(
                'v1/players/%s',
                $this->sleeperApiClient->getSports()
            )
        );

        return $this->sleeperApiClient->get(
            $uri,
            SleeperPlayerList::class
        );
    }

    public function trending(
        string $type = self::TRENDING_TYPE_ADD,
        int    $lookBackHours = 24,
        int    $limit = 25
    ): SleeperPlayerList
    {
        $uri = $this->uri(
            sprintf(
                'v1/players/%s/trending/%s',
                $this->sleeperApiClient->getSports(),
                $type
            ), [
                'lookback_hours' => $lookBackHours,
                'limit' => $limit
            ]
        );

        return $this->sleeperApiClient->get(
            $uri,
            SleeperPlayerList::class
        );
    }

    public function research(
        int    $season,
        ?int   $week = null
    )
    {
        $uri = $this->uri(
            sprintf(
                'players/%s/research/regular/%s%s',
                $this->sleeperApiClient->getSports(),
                $season,
                $week ?: ''
            )
        );

        return $this->sleeperApiClient->get(
            $uri,
            'TBD'
        );
    }

    public function get(
        int $playerId
    ): SleeperPlayer
    {
        $url = $this->uri(
            sprintf(
                'players/%s/%s',
                $this->sleeperApiClient->getSports(),
                $playerId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayer::class
        );
    }

    public function depthChart(string $teamAbbreviation)
    {
        $url = $this->uri(
            sprintf(
                'players/%s/%s/depth_chart',
                $this->sleeperApiClient->getSports(),
                $teamAbbreviation
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            'TBD'
        );
    }
}