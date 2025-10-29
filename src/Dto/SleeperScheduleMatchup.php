<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperScheduleMatchup
{
    private int $week;

    private string $status;

    private string $home;

    private string $gameId;

    private DateTime $date;

    private string $away;

    public function getWeek(): int
    {
        return $this->week;
    }

    public function setWeek(int $week): SleeperScheduleMatchup
    {
        $this->week = $week;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): SleeperScheduleMatchup
    {
        $this->status = $status;
        return $this;
    }

    public function getHome(): string
    {
        return $this->home;
    }

    public function setHome(string $home): SleeperScheduleMatchup
    {
        $this->home = $home;
        return $this;
    }

    public function getGameId(): string
    {
        return $this->gameId;
    }

    public function setGameId(string $gameId): SleeperScheduleMatchup
    {
        $this->gameId = $gameId;
        return $this;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): SleeperScheduleMatchup
    {
        $this->date = $date;
        return $this;
    }

    public function getAway(): string
    {
        return $this->away;
    }

    public function setAway(string $away): SleeperScheduleMatchup
    {
        $this->away = $away;
        return $this;
    }
}