<?php
declare(strict_types=1);

/** @todo: extend missing fields */

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperPlayer
{
    private string $playerId;

    private ?string $firstName = null;

    private ?string $lastName = null;

    private ?int $age = null;

    private ?string $team = null;

    private ?int $number = null;

    private ?string $status = null;

    private bool $active = true;

    private ?string $position = null;

    private ?array $fantasyPositions = null;

    private ?string $depthChartPosition = null;

    private ?int $deptchChartOrder = null;

    private ?string $weight = null;

    private ?string $height = null;

    private ?string $highSchool = null;

    private ?string $college = null;

    private ?DateTime $birthDate = null;

    private ?string $birthCity = null;

    private ?string $birthState = null;

    private ?string $birthCountry = null;

    private ?int $yearsExp = null;

    private ?int $espnId = null;

    private ?int $fantasyDataId = null;

    private ?string $gsisId = null;

    private ?int $pandascoreId = null;

    private ?int $rotowireId = null;

    private ?int $rotoworldId = null;

    private ?string $sportradarId = null;

    private ?int $statsId = null;

    private ?int $swishId = null;

    private ?int $yahooId = null;

    public function getPlayerId(): string
    {
        return $this->playerId;
    }

    public function setPlayerId(string $playerId): SleeperPlayer
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): SleeperPlayer
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): SleeperPlayer
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): SleeperPlayer
    {
        $this->age = $age;
        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): SleeperPlayer
    {
        $this->team = $team;
        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): SleeperPlayer
    {
        $this->number = $number;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): SleeperPlayer
    {
        $this->status = $status;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): SleeperPlayer
    {
        $this->active = $active;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): SleeperPlayer
    {
        $this->position = $position;
        return $this;
    }

    public function getFantasyPositions(): ?array
    {
        return $this->fantasyPositions;
    }

    public function setFantasyPositions(?array $fantasyPositions): SleeperPlayer
    {
        $this->fantasyPositions = $fantasyPositions;
        return $this;
    }

    public function getDepthChartPosition(): ?string
    {
        return $this->depthChartPosition;
    }

    public function setDepthChartPosition(?string $depthChartPosition): SleeperPlayer
    {
        $this->depthChartPosition = $depthChartPosition;
        return $this;
    }

    public function getDeptchChartOrder(): ?int
    {
        return $this->deptchChartOrder;
    }

    public function setDeptchChartOrder(?int $deptchChartOrder): SleeperPlayer
    {
        $this->deptchChartOrder = $deptchChartOrder;
        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): SleeperPlayer
    {
        $this->weight = $weight;
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): SleeperPlayer
    {
        $this->height = $height;
        return $this;
    }

    public function getHighSchool(): ?string
    {
        return $this->highSchool;
    }

    public function setHighSchool(?string $highSchool): SleeperPlayer
    {
        $this->highSchool = $highSchool;
        return $this;
    }

    public function getCollege(): ?string
    {
        return $this->college;
    }

    public function setCollege(?string $college): SleeperPlayer
    {
        $this->college = $college;
        return $this;
    }

    public function getBirthDate(): ?DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(?DateTime $birthDate): SleeperPlayer
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    public function setBirthCity(?string $birthCity): SleeperPlayer
    {
        $this->birthCity = $birthCity;
        return $this;
    }

    public function getBirthState(): ?string
    {
        return $this->birthState;
    }

    public function setBirthState(?string $birthState): SleeperPlayer
    {
        $this->birthState = $birthState;
        return $this;
    }

    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    public function setBirthCountry(?string $birthCountry): SleeperPlayer
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }

    public function getYearsExp(): ?int
    {
        return $this->yearsExp;
    }

    public function setYearsExp(?int $yearsExp): SleeperPlayer
    {
        $this->yearsExp = $yearsExp;
        return $this;
    }

    public function getEspnId(): ?int
    {
        return $this->espnId;
    }

    public function setEspnId(?int $espnId): SleeperPlayer
    {
        $this->espnId = $espnId;
        return $this;
    }

    public function getFantasyDataId(): ?int
    {
        return $this->fantasyDataId;
    }

    public function setFantasyDataId(?int $fantasyDataId): SleeperPlayer
    {
        $this->fantasyDataId = $fantasyDataId;
        return $this;
    }

    public function getGsisId(): ?string
    {
        return $this->gsisId;
    }

    public function setGsisId(?string $gsisId): SleeperPlayer
    {
        $this->gsisId = $gsisId;
        return $this;
    }

    public function getPandascoreId(): ?int
    {
        return $this->pandascoreId;
    }

    public function setPandascoreId(?int $pandascoreId): SleeperPlayer
    {
        $this->pandascoreId = $pandascoreId;
        return $this;
    }

    public function getRotowireId(): ?int
    {
        return $this->rotowireId;
    }

    public function setRotowireId(?int $rotowireId): SleeperPlayer
    {
        $this->rotowireId = $rotowireId;
        return $this;
    }

    public function getRotoworldId(): ?int
    {
        return $this->rotoworldId;
    }

    public function setRotoworldId(?int $rotoworldId): SleeperPlayer
    {
        $this->rotoworldId = $rotoworldId;
        return $this;
    }

    public function getSportradarId(): ?string
    {
        return $this->sportradarId;
    }

    public function setSportradarId(?string $sportradarId): SleeperPlayer
    {
        $this->sportradarId = $sportradarId;
        return $this;
    }

    public function getStatsId(): ?int
    {
        return $this->statsId;
    }

    public function setStatsId(?int $statsId): SleeperPlayer
    {
        $this->statsId = $statsId;
        return $this;
    }

    public function getSwishId(): ?int
    {
        return $this->swishId;
    }

    public function setSwishId(?int $swishId): SleeperPlayer
    {
        $this->swishId = $swishId;
        return $this;
    }

    public function getYahooId(): ?int
    {
        return $this->yahooId;
    }

    public function setYahooId(?int $yahooId): SleeperPlayer
    {
        $this->yahooId = $yahooId;
        return $this;
    }
}
