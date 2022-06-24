<?php

declare(strict_types=1);

namespace XYZ\Models;

use XYZ\Models\Matchup\MatchupTeam;

class Matchup
{
    private int $id;

    private int $leagueId;

    private int $week;

    private MatchupTeam $home;

    private MatchupTeam $away;
}