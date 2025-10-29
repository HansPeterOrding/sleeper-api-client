<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperNflState
{
    private int $week;

    private string $seasonType;

    private ?DateTime $seasonStartDate;

    private string $season;

    private ?string $previousSeason;

    private int $leg;

    private string $leagueSeason;

    private string $leagueCreateSeason;

    private int $diplayWeek;

    public function getWeek(): int
    {
        return $this->week;
    }

    public function setWeek(int $week): SleeperNflState
    {
        $this->week = $week;
        return $this;
    }

    public function getSeasonType(): string
    {
        return $this->seasonType;
    }

    public function setSeasonType(string $seasonType): SleeperNflState
    {
        $this->seasonType = $seasonType;
        return $this;
    }

    public function getSeasonStartDate(): ?DateTime
    {
        return $this->seasonStartDate;
    }

    public function setSeasonStartDate(?DateTime $seasonStartDate): SleeperNflState
    {
        $this->seasonStartDate = $seasonStartDate;
        return $this;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season): SleeperNflState
    {
        $this->season = $season;
        return $this;
    }

    public function getPreviousSeason(): ?string
    {
        return $this->previousSeason;
    }

    public function setPreviousSeason(?string $previousSeason): SleeperNflState
    {
        $this->previousSeason = $previousSeason;
        return $this;
    }

    public function getLeg(): int
    {
        return $this->leg;
    }

    public function setLeg(int $leg): SleeperNflState
    {
        $this->leg = $leg;
        return $this;
    }

    public function getLeagueSeason(): string
    {
        return $this->leagueSeason;
    }

    public function setLeagueSeason(string $leagueSeason): SleeperNflState
    {
        $this->leagueSeason = $leagueSeason;
        return $this;
    }

    public function getLeagueCreateSeason(): string
    {
        return $this->leagueCreateSeason;
    }

    public function setLeagueCreateSeason(string $leagueCreateSeason): SleeperNflState
    {
        $this->leagueCreateSeason = $leagueCreateSeason;
        return $this;
    }

    public function getDiplayWeek(): int
    {
        return $this->diplayWeek;
    }

    public function setDiplayWeek(int $diplayWeek): SleeperNflState
    {
        $this->diplayWeek = $diplayWeek;
        return $this;
    }
}
