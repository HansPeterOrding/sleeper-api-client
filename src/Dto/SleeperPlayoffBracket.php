<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperPlayoffBracket
{
    /**
     * @var SleeperPlayoffBracketMatchup[]
     */
    private array $matchups;

    /**
     * @return SleeperPlayoffBracketMatchup[]
     */
    public function getMatchups(): array
    {
        return $this->matchups;
    }

    /**
     * @param SleeperPlayoffBracketMatchup[] $matchups
     */
    public function setMatchups(array $matchups): SleeperPlayoffBracket
    {
        $this->matchups = $matchups;
        return $this;
    }
}