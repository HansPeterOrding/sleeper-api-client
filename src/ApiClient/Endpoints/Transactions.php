<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\Dto\SleeperTransaction;

class Transactions extends AbstractEndpoint
{
    /**
     * @return SleeperTransaction[]
     */
    public function list(string $leagueId, int $round)
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
}
