<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\Dto\SleeperDraft;
use HansPeterOrding\SleeperApiClient\Dto\SleeperDraftPick;

class Picks extends AbstractEndpoint
{
    /**
     * @return SleeperDraftPick[]
     */
    public function list(string $draftId)
    {
        $url = $this->uri(
            sprintf(
                'draft/%s/picks',
                $draftId
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDraftPick::class . '[]'
        );
    }
}
