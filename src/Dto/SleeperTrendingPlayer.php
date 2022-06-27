<?php

declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTrendingPlayer
{
    protected ?string $playerId;

    protected ?int $count;

    public function getPlayerId(): ?string
    {
        return $this->playerId;
    }

    public function setPlayerId(?string $playerId): SleeperTrendingPlayer
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): SleeperTrendingPlayer
    {
        $this->count = $count;
        return $this;
    }
}

