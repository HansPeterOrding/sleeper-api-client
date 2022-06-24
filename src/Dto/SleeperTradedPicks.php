<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTradedPicks
{
    /**
     * @var SleeperTradedPick[]
     */
    private array $tradedPicks;

    /**
     * @return SleeperTradedPick[]
     */
    public function getTradedPicks(): array
    {
        return $this->tradedPicks;
    }

    /**
     * @param SleeperTradedPick[] $tradedPicks
     */
    public function setTradedPicks(array $tradedPicks): SleeperTradedPicks
    {
        $this->tradedPicks = $tradedPicks;
        return $this;
    }
}