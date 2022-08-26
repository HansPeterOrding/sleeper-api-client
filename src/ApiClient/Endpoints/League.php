<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDepthChart;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDraft;
use HansPeterOrding\SleeperApiClient\Dto\SleeperLeague;
use HansPeterOrding\SleeperApiClient\Dto\SleeperMatchup;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayerList;
use HansPeterOrding\SleeperApiClient\Dto\SleeperPlayoffMatchup;
use HansPeterOrding\SleeperApiClient\Dto\SleeperResearchPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperRoster;
use HansPeterOrding\SleeperApiClient\Dto\SleeperTransaction;
use HansPeterOrding\SleeperApiClient\Dto\SleeperTrendingPlayer;
use HansPeterOrding\SleeperApiClient\Dto\SleeperUser;

class League extends AbstractEndpoint
{
    public function get(
        string $leagueId
    ): ?SleeperLeague
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

    /**
     * @return SleeperRoster[]
     */
    public function listRosters(string $leagueId)
    {
        $url = $this->uri(
            sprintf(
                'league/%s/rosters',
                $leagueId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperRoster::class . '[]'
        );
    }

    /**
     * @return SleeperPlayoffMatchup[]
     */
    public function listPlayoffMatchups(
        string $leagueId,
        string $branch = AbstractEndpoint::BRANCH_WINNERS
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

    public function listTradedPicks(string $leagueId)
    {
        $tradedPicks = new TradedPicks($this->sleeperApiClient, TradedPicks::PARENT_LEAGUE);

        return $tradedPicks->list($leagueId);
    }

    /**
     * @return SleeperTransaction[]
     */
    public function listTransactions(string $leagueId, int $round)
    {
        $url = $this->uri(
            sprintf(
                'league/%s/transactions/%s',
                $leagueId,
                $round
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperTransaction::class . '[]'
        );
    }

    /**
     * @return SleeperMatchup[]
     */
    public function listMatchups(string $leagueId, int $week)
    {
        $url = $this->uri(
            sprintf(
                'league/%s/matchups/%s',
                $leagueId,
                $week
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperMatchup::class . '[]'
        );
    }
}
