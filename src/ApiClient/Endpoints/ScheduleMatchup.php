<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperScheduleMatchup;

class ScheduleMatchup extends AbstractEndpoint
{
    public function list(string $season, string $seasonType = AbstractEndpoint::SEASON_TYPE_REGULAR)
    {
        $url = $this->uri(
            sprintf(
            'schedule/nfl/%s/%s',
                $seasonType,
                $season
            ),
            [],
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperScheduleMatchup::class . '[]'
        );
    }
}
