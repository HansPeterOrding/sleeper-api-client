<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperDraftPickMetadata
{
    private ?string $yearsExp;

    private ?string $team;

    private ?string $status;

    private ?string $sport;

    private ?string $position;

    private ?string $playerId;

    private ?string $number;

    private ?DateTime $newsUpdated;

    private ?string $lastName;

    private ?string $injuryStatus;

    private ?string $firstName;

    public function getYearsExp(): ?string
    {
        return $this->yearsExp;
    }

    public function setYearsExp(?string $yearsExp): SleeperDraftPickMetadata
    {
        $this->yearsExp = $yearsExp;
        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): SleeperDraftPickMetadata
    {
        $this->team = $team;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): SleeperDraftPickMetadata
    {
        $this->status = $status;
        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(?string $sport): SleeperDraftPickMetadata
    {
        $this->sport = $sport;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): SleeperDraftPickMetadata
    {
        $this->position = $position;
        return $this;
    }

    public function getPlayerId(): ?string
    {
        return $this->playerId;
    }

    public function setPlayerId(?string $playerId): SleeperDraftPickMetadata
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): SleeperDraftPickMetadata
    {
        $this->number = $number;
        return $this;
    }

    public function getNewsUpdated(): ?DateTime
    {
        return $this->newsUpdated;
    }

    public function setNewsUpdated(?DateTime $newsUpdated): SleeperDraftPickMetadata
    {
        $this->newsUpdated = $newsUpdated;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): SleeperDraftPickMetadata
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getInjuryStatus(): ?string
    {
        return $this->injuryStatus;
    }

    public function setInjuryStatus(?string $injuryStatus): SleeperDraftPickMetadata
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): SleeperDraftPickMetadata
    {
        $this->firstName = $firstName;
        return $this;
    }
}