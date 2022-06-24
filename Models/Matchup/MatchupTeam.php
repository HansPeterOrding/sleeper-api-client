<?php

declare(strict_types=1);

namespace XYZ\Models\Matchup;

class MatchupTeam
{
    private $roster;

    /**
     * @var MatchupPlayer[]
     */
    private iterable $matchupPlayers;

    private float $points;
}