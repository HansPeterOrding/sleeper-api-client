<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Endpoints;

use HansPeterOrding\SleeperApiClient\ApiClient\SleeperApiClientInterface;
use Psr\Http\Message\UriInterface;

abstract class AbstractEndpoint
{
    public const SEASON_TYPE_REGULAR = 'regular';
    public const SEASON_TYPE_POST = 'post';
    public const SEASON_TYPE_PRE = 'pre';
    public const SEASON_TYPE_OFF = 'off';

    public const BRANCH_WINNERS = 'winners_bracket';
    public const BRANCH_LOSERS = 'losers_bracket';

    public const POSITION_QB = 'QB';
    public const POSITION_WR = 'WR';
    public const POSITION_RB = 'RB';
    public const POSITION_TE = 'TE';
    public const POSITION_K = 'K';
    public const POSITION_DEF = 'DEF';
    public const POSITION_LB = 'LB';
    public const POSITION_DB = 'DB';
    public const POSITION_DL = 'DL';
    public const POSITION_FLEX = 'FLEX';
    public const POSITION_REC_FLEX = 'REC_FLEX';
    public const POSITION_IDP_FLEX = 'IDP_FLEX';
    public const POSITION_SUPER_FLEX = 'SUPER_FLEX';

    public const ORDER_BY_RUSH_YD = 'rush_yd';
    public const ORDER_BY_RUSH_TD = 'rush_TD';
    public const ORDER_BY_RUSH_FD = 'rush_fd';
    public const ORDER_BY_RUSH_ATT = 'rush_att';

    public const ORDER_BY_PTS_STD = 'pts_std';
    public const ORDER_BY_PTS_PPR = 'pts_ppr';
    public const ORDER_BY_PTS_HALF_PPR = 'pts_half_ppr';

    public const ORDER_BY_PASS_YD = 'pass_yd';
    public const ORDER_BY_PASS_TD = 'pass_td';
    public const ORDER_BY_PASS_INT = 'pass_int';
    public const ORDER_BY_PASS_FD = 'pass_fd';
    public const ORDER_BY_PASS_CMP = 'pass_cmp';
    public const ORDER_BY_PASS_ATT = 'pass_att';
    public const ORDER_BY_PASS_2PT = 'pass_2pt';

    public const ORDER_BY_GP = 'gp';
    public const ORDER_BY_FUM_LOST = 'fum_lost';
    public const ORDER_BY_CMP_PCT = 'cmp_pct';

    public const ORDER_BY_ADP_STD = 'adp_std';
    public const ORDER_BY_ADP_ROOKIE = 'adp_rookie';
    public const ORDER_BY_ADP_PPR = 'adp_ppr';
    public const ORDER_BY_ADP_IDP = 'adp_idp';
    public const ORDER_BY_ADP_HALF_PPR = 'adp_half_ppr';
    public const ORDER_BY_ADP_DYNASTY_STD = 'adp_dynasty_std';
    public const ORDER_BY_ADP_DYNASTY_PPR = 'adp_dynasty_ppr';
    public const ORDER_BY_ADP_DYNASTY_HALF_PPR = 'adp_dynasty_half_ppr';
    public const ORDER_BY_ADP_DYNASTY_2QB = 'adp_dynasty_2qb';
    public const ORDER_BY_ADP_DYNASTY = 'adp_dynasty';
    public const ORDER_BY_ADP_2QB = 'adp_2qb';

    public const GROUPING_SEASON = 'season';
    public const GROUPING_WEEK = 'week';

    public const TRENDING_TYPE_ADD = 'add';
    public const TRENDING_TYPE_DROP = 'drop';

    protected SleeperApiClientInterface $sleeperApiClient;

    public function __construct(
        SleeperApiClientInterface $sleeperApiClient
    )
    {
        $this->sleeperApiClient = $sleeperApiClient;
    }

    public function uri(string $path, $attributes = [], string $baseUri = SleeperApiClientInterface::BASE_URI_APP): UriInterface
    {
        $uri = $baseUri . $path;
        if ($attributes) {
            $uri .= '?' . preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', http_build_query($attributes));
        }

        return $this->sleeperApiClient->getUriFactory()->createUri($uri);
    }
}
