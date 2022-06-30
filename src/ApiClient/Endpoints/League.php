<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDepthChart;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDraft;
use HansPeterOrding\SleeperApiClient\Dto\SleeperLeague;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerList;
use HansPeterOrding\SleeperApiClient\Dto\SleeperResearchPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperTrendingPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperUser;

class League extends AbstractEndpoint
{
    public function get(
        int $leagueId
    ): SleeperLeague
    {
        $url = $this->uri(
            sprintf(
                'league/%s',
                $leagueId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperLeague::class
        );
    }

    /**
     * @return SleeperUser[]
     */
    public function listUsers(string $leagueId)
    {
        $url = $this->uri(
            sprintf(
                'league/%s/users',
                $leagueId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperUser::class . '[]'
        );
    }

    /**
     * @return SleeperDraft[]
     */
    public function listDrafts(string $leagueId)
    {
        $url = $this->uri(
            sprintf(
                'league/%s/drafts',
                $leagueId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDraft::class . '[]'
        );
    }

    public function playoffMatchup(): PlayoffMatchup
    {
        return new PlayoffMatchup($this->sleeperApiClient);
    }

    public function tradedPicks(): TradedPicks
    {
        return new TradedPicks($this->sleeperApiClient, TradedPicks::PARENT_LEAGUE);
    }

    public function transactions(): Transactions
    {
        return new Transactions($this->sleeperApiClient);
    }
}
