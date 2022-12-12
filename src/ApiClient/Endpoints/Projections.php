<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerProjection;

class Projections extends AbstractEndpoint
{
    /**
     * @return SleeperPlayerProjection[]
     */
    public function list(
        string     $season,
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
                'projections/nfl/%s%s',
                $season,
                $week?'/'.$week:''
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerProjection::class . '[]'
        );
    }

    /**
     * @return SleeperPlayerProjection|null
     */
    public function getForPlayer(
        string $playerId,
        string $season,
        string $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR,
        ?int $week = null
    )
    {
        $attributes = [
            'season' => $season,
            'season_type' => $seasonType,
            'grouping' => AbstractEndpoint::GROUPING_SEASON
        ];

        if($week) {
            $attributes['week'] = $week;
        }

        $url = $this->uri(
            sprintf(
                'projections/nfl/player/%s',
                $playerId
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerProjection::class
        );
    }

    /**
     * @return SleeperPlayerProjection[]
     */
    public function getWeeklyForPlayer(
        string $playerId,
        string $season,
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
                'projections/nfl/player/%s',
                $playerId
            ),
            $attributes,
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayerProjection::class . '[]'
        );
    }
}
