<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperMatchup
{
    private ?array $startersPoints = [];

    private ?array $playersPoints = [];

    private ?array $starters = [];

    private int $rosterId;

    private ?array $players = [];

    private int $matchupId;

    private float $points;

    private ?float $customPoints;

    public function getStartersPoints(): ?array
    {
        return $this->startersPoints;
    }

    public function setStartersPoints(?array $startersPoints): SleeperMatchup
    {
        $this->startersPoints = $startersPoints;
        return $this;
    }

    public function getPlayersPoints(): ?array
    {
        return $this->playersPoints;
    }

    public function setPlayersPoints(?array $playersPoints): SleeperMatchup
    {
        $this->playersPoints = $playersPoints;
        return $this;
    }

    public function getStarters(): ?array
    {
        return $this->starters;
    }

    public function setStarters(?array $starters): SleeperMatchup
    {
        $this->starters = $starters;
        return $this;
    }

    public function getRosterId(): int
    {
        return $this->rosterId;
    }

    public function setRosterId(int $rosterId): SleeperMatchup
    {
        $this->rosterId = $rosterId;
        return $this;
    }

    public function getPlayers(): ?array
    {
        return $this->players;
    }

    public function setPlayers(?array $players): SleeperMatchup
    {
        $this->players = $players;
        return $this;
    }

    public function getMatchupId(): int
    {
        return $this->matchupId;
    }

    public function setMatchupId(int $matchupId): SleeperMatchup
    {
        $this->matchupId = $matchupId;
        return $this;
    }

    public function getPoints(): float
    {
        return $this->points;
    }

    public function setPoints(float $points): SleeperMatchup
    {
        $this->points = $points;
        return $this;
    }

    public function getCustomPoints(): ?float
    {
        return $this->customPoints;
    }

    public function setCustomPoints(?float $customPoints): SleeperMatchup
    {
        $this->customPoints = $customPoints;
        return $this;
    }
}
