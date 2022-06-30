<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use HansPeterOrding\SleeperApiClient\Dto\SleeperTradedPick;

class TradedPicks extends AbstractEndpoint
{
    public const PARENT_DRAFT = 'draft';
    public const PARENT_LEAGUE = 'league';

    private string $parent;

    public function __construct(
        SleeperApiClientInterface $sleeperApiClient,
        $parent = self::PARENT_LEAGUE
    )
    {
        parent::__construct($sleeperApiClient);

        $this->parent = $parent;
    }

    /**
     * @param DraftId or LeagueId $parentId
     * @return SleeperTradedPick[]
     */
    public function list(
        string $parentId
    ) {
        $url = $this->uri(
            sprintf(
                '%s/%s/traded_picks',
                $this->parent,
                $parentId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperTradedPick::class . '[]'
        );
    }
}
