<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperRoster
{
    private int $rosterId;

    private string $ownerId;

    private string $leagueId;

    private array $starters = [];

    private ?array $reserve = [];

    private array $players = [];

    private SleeperRosterSettings $settings;

    public function getRosterId(): int
    {
        return $this->rosterId;
    }

    public function setRosterId(int $rosterId): SleeperRoster
    {
        $this->rosterId = $rosterId;
        return $this;
    }

    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    public function setOwnerId(string $ownerId): SleeperRoster
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function setLeagueId(string $leagueId): SleeperRoster
    {
        $this->leagueId = $leagueId;
        return $this;
    }

    public function getStarters(): array
    {
        return $this->starters;
    }

    public function setStarters(array $starters): SleeperRoster
    {
        $this->starters = $starters;
        return $this;
    }

    public function getReserve(): ?array
    {
        return $this->reserve;
    }

    public function setReserve(?array $reserve): SleeperRoster
    {
        $this->reserve = $reserve;
        return $this;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function setPlayers(array $players): SleeperRoster
    {
        $this->players = $players;
        return $this;
    }

    public function getSettings(): SleeperRosterSettings
    {
        return $this->settings;
    }

    public function setSettings(SleeperRosterSettings $settings): SleeperRoster
    {
        $this->settings = $settings;
        return $this;
    }
}
