<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperDraftMetadata
{
    private ?string $scoringType;

    private ?string $name;

    private ?string $elapsedPickTimer;

    private ?string $description;

    public function getScoringType(): ?string
    {
        return $this->scoringType;
    }

    public function setScoringType(?string $scoringType): SleeperDraftMetadata
    {
        $this->scoringType = $scoringType;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): SleeperDraftMetadata
    {
        $this->name = $name;
        return $this;
    }

    public function getElapsedPickTimer(): ?string
    {
        return $this->elapsedPickTimer;
    }

    public function setElapsedPickTimer(?string $elapsedPickTimer): SleeperDraftMetadata
    {
        $this->elapsedPickTimer = $elapsedPickTimer;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): SleeperDraftMetadata
    {
        $this->description = $description;
        return $this;
    }
}