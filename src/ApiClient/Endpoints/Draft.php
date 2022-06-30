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

class Draft extends AbstractEndpoint
{
    public function get(
        string $draftId
    ): SleeperDraft
    {
        $url = $this->uri(
            sprintf(
                'draft/%s',
                $draftId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDraft::class
        );
    }

    public function picks(): Picks
    {
        return new Picks($this->sleeperApiClient);
    }

    public function tradedPicks(): TradedPicks
    {
        return new TradedPicks($this->sleeperApiClient, TradedPicks::PARENT_DRAFT);
    }
}
