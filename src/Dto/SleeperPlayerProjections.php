<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperPlayerProjections
{
    private ?int $week;

    private ?string $team;

    private SleeperStats $stats;

    private string $sport;

    private string $seasonType;

    private string $season;

    private string $playerId;

    private SleeperPlayer $player;

    private ?string $opponent;

    private ?string $gameId;

    private ?DateTime $date;

    private ?string $company;

    private ?string $category;

    public function __construct()
    {
        $this->stats = new SleeperStats();
    }

    public function getWeek(): ?int
    {
        return $this->week;
    }

    public function setWeek(?int $week): SleeperPlayerProjections
    {
        $this->week = $week;
        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): SleeperPlayerProjections
    {
        $this->team = $team;
        return $this;
    }

    public function getStats(): SleeperStats
    {
        return $this->stats;
    }

    public function setStats(SleeperStats $stats): SleeperPlayerProjections
    {
        $this->stats = $stats;
        return $this;
    }

    public function getSport(): string
    {
        return $this->sport;
    }

    public function setSport(string $sport): SleeperPlayerProjections
    {
        $this->sport = $sport;
        return $this;
    }

    public function getSeasonType(): string
    {
        return $this->seasonType;
    }

    public function setSeasonType(string $seasonType): SleeperPlayerProjections
    {
        $this->seasonType = $seasonType;
        return $this;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season): SleeperPlayerProjections
    {
        $this->season = $season;
        return $this;
    }

    public function getPlayerId(): string
    {
        return $this->playerId;
    }

    public function setPlayerId(string $playerId): SleeperPlayerProjections
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getPlayer(): SleeperPlayer
    {
        return $this->player;
    }

    public function setPlayer(SleeperPlayer $player): SleeperPlayerProjections
    {
        $this->player = $player;
        return $this;
    }

    public function getOpponent(): ?string
    {
        return $this->opponent;
    }

    public function setOpponent(?string $opponent): SleeperPlayerProjections
    {
        $this->opponent = $opponent;
        return $this;
    }

    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    public function setGameId(?string $gameId): SleeperPlayerProjections
    {
        $this->gameId = $gameId;
        return $this;
    }

    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    public function setDate(?DateTime $date): SleeperPlayerProjections
    {
        $this->date = $date;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): SleeperPlayerProjections
    {
        $this->company = $company;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): SleeperPlayerProjections
    {
        $this->category = $category;
        return $this;
    }
}
