<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperResearchPlayer
{
    protected string $playerId;

    protected ?float $started;

    protected ?float $owned;

    public function getPlayerId(): string
    {
        return $this->playerId;
    }

    public function setPlayerId(string $playerId): SleeperResearchPlayer
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getStarted(): ?float
    {
        return $this->started;
    }

    public function setStarted(?float $started): SleeperResearchPlayer
    {
        $this->started = $started;
        return $this;
    }

    public function getOwned(): ?float
    {
        return $this->owned;
    }

    public function setOwned(?float $owned): SleeperResearchPlayer
    {
        $this->owned = $owned;
        return $this;
    }
}
