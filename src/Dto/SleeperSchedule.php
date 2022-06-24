<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperSchedule
{
    /**
     * @var SleeperScheduleMatchup[]
     */
    private array $matchups;

    /**
     * @return SleeperScheduleMatchup[]
     */
    public function getMatchups(): array
    {
        return $this->matchups;
    }

    /**
     * @param SleeperScheduleMatchup[] $matchups
     */
    public function setMatchups(array $matchups): SleeperSchedule
    {
        $this->matchups = $matchups;
        return $this;
    }
}