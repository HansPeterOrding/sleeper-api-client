<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTradedPick
{
    private string $season;

    private int $round;

    private int $rosterId;

    private int $previousOwnerId;

    private int $ownerId;

    private ?int $draftId;

    private ?int $leagueId;

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season): SleeperTradedPick
    {
        $this->season = $season;
        return $this;
    }

    public function getRound(): int
    {
        return $this->round;
    }

    public function setRound(int $round): SleeperTradedPick
    {
        $this->round = $round;
        return $this;
    }

    public function getRosterId(): int
    {
        return $this->rosterId;
    }

    public function setRosterId(int $rosterId): SleeperTradedPick
    {
        $this->rosterId = $rosterId;
        return $this;
    }

    public function getPreviousOwnerId(): int
    {
        return $this->previousOwnerId;
    }

    public function setPreviousOwnerId(int $previousOwnerId): SleeperTradedPick
    {
        $this->previousOwnerId = $previousOwnerId;
        return $this;
    }

    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    public function setOwnerId(int $ownerId): SleeperTradedPick
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getDraftId(): ?int
    {
        return $this->draftId;
    }

    public function setDraftId(?int $draftId): SleeperTradedPick
    {
        $this->draftId = $draftId;
        return $this;
    }

    public function getLeagueId(): ?int
    {
        return $this->leagueId;
    }

    public function setLeagueId(?int $leagueId): SleeperTradedPick
    {
        $this->leagueId = $leagueId;
        return $this;
    }
}