<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperPlayerList
{
    /**
     * @var SleeperPlayer[]
     */
    protected array $players = [];

    /**
     * @return SleeperPlayer[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @param SleeperPlayer[] $players
     * @return SleeperPlayerList
     */
    public function setPlayers(array $players): SleeperPlayerList
    {
        $this->players = $players;
        return $this;
    }

    public function addPlayer(SleeperPlayer $player): self
    {
        $this->players[] = $player;
        return $this;
    }
}