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

class User extends AbstractEndpoint
{
    public function get(
        string $userIdOrUsername
    ): SleeperUser
    {
        $url = $this->uri(
            sprintf(
                'user/%s',
                $userIdOrUsername
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperUser::class
        );
    }

    public function depthChart(string $teamAbbreviation)
    {
        $url = $this->uri(
            sprintf(
                'players/%s/%s/depth_chart',
                $this->sleeperApiClient->getSport(),
                $teamAbbreviation
            ),
            [],
            SleeperApiClientInterface::BASE_URI_COM
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDepthChart::class
        );
    }

    /**
     * @return SleeperLeague[]
     */
    public function listLeagues(string $userId, int $season)
    {
        $url = $this->uri(
            sprintf(
                'user/%s/leagues/%s/%s',
                $userId,
                $this->sleeperApiClient->getSport(),
                $season
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperLeague::class . '[]'
        );
    }

    /**
     * @return SleeperDraft[]
     */
    public function listDrafts(string $userId, int $season)
    {
        $url = $this->uri(
            sprintf(
                'user/%s/drafts/%s/%s',
                $userId,
                $this->sleeperApiClient->getSport(),
                $season
            )
        );

        return $this->sleeperApiClient->get(
            $url,
            SleeperDraft::class . '[]'
        );
    }

    public static function playerObjectToPlayerArrayCallback(string $json): string
    {
        $json = preg_replace('/^\{"[0-9]*":/', '[', $json);
        $json = preg_replace('/\}\}/', '}]', $json);
        $json = preg_replace('/,"([0-9]*|[A-Z]{2,3})":/', ',', $json);

        return $json;
    }

    public static function researchPlayerObjectToReseachPlayerArrayCallback(string $json): string
    {
        $json = preg_replace('/^\{/', '[', $json);
        $json = preg_replace('/\}\}/', '}]', $json);
        $json = preg_replace('/"([0-9]*|[A-Z]*)":({("started":[0-9.]*,)?"owned":[0-9.]*)(})/', '$2,"playerId":"$1"$4', $json);

        return $json;
    }
}
