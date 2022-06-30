<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayoffMatchup;

class PlayoffMatchup extends AbstractEndpoint
{
    public const BRANCH_WINNERS = 'winners_bracket';
    public const BRANCH_LOSERS = 'losers_bracket';

    /**
     * @return SleeperPlayoffMatchup[]
     */
    public function get(
        string $leagueId,
        string $branch = self::BRANCH_WINNERS
    )
    {
        $url = $this->uri(
            sprintf(
                'league/%s/%s',
                $leagueId,
                $branch
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperPlayoffMatchup::class . '[]'
        );
    }
}
