<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\Dto\SleeperNflState;

class NflState extends AbstractEndpoint
{
    public function get()
    {
        $url = $this->uri(
            'state/nfl'
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperNflState::class
        );
    }
}
