<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerStats;

class Stats extends AbstractEndpoint
{
    /**
     * @return SleeperPlayerStats[]
     */
    public function list(
        int     $season,
        string  $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR,
        ?int $week = null,
        ?array  $position = null,
        ?string $orderBy = null
    )
    {
        $attributes = [
            'season_type' => $seasonType
        ];

        if ($position) {
            $attributes['position'] = $position;
        }

        if ($orderBy) {
            $attributes['order_by'] = $orderBy;
        }

        $url = $this->uri(
            sprintf(
                'stats/nfl/%s%s',
                $season,
                $week?:''
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerStats::class . '[]'
        );
    }

    /**
     * @return SleeperPlayerStats
     */
    public function getForPlayer(
        int $playerId,
        int $season,
        string $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR
    )
    {
        $attributes = [
            'season' => $season,
            'season_type' => $seasonType,
            'grouping' => AbstractEndpoint::GROUPING_SEASON
        ];

        $url = $this->uri(
            sprintf(
                'stats/nfl/player/%s',
                $playerId
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerStats::class
        );
    }

    /**
     * @return SleeperPlayerStats[]
     */
    public function getWeeklyForPlayer(
        int $playerId,
        int $season,
        string $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR
    )
    {
        $attributes = [
            'season' => $season,
            'season_type' => $seasonType,
            'grouping' => AbstractEndpoint::GROUPING_WEEK
        ];

        $url = $this->uri(
            sprintf(
                'stats/nfl/player/%s',
                $playerId
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerStats::class . '[]'
        );
    }
}

//https://api.sleeper.com/stats/nfl/2021/1?season_type=regular&position[]=DB&position[]=DL&position[]=LB&position[]=QB&position[]=RB&position[]=TE&position[]=WR&player[]=2309&order_by=pts_ppr
//https://api.sleeper.com/stats/nfl/player/2309?season_type=regular&season=2021
