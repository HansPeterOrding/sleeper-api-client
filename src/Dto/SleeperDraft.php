<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperDraft
{
    private string $type;

    private string $status;

    private ?int $startTime;

    private string $sport;

    private array $slotToRosterId;

    private SleeperDraftSettings $settings;

    private string $seasonType;

    private string $season;

    private SleeperDraftMetadata $metadata;

    private ?string $leagueId = null;

    private ?int $lastPicked;

    private ?int $lastMessageTime;

    private ?string $lastMessageId;

    private ?array $draftOrder;

    private string $draftId;

    private ?array $creators;

    private int $created;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): SleeperDraft
    {
        $this->type = $type;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): SleeperDraft
    {
        $this->status = $status;
        return $this;
    }

    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    public function setStartTime(?int $startTime): SleeperDraft
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getSport(): string
    {
        return $this->sport;
    }

    public function setSport(string $sport): SleeperDraft
    {
        $this->sport = $sport;
        return $this;
    }

    public function getSlotToRosterId(): array
    {
        return $this->slotToRosterId;
    }

    public function setSlotToRosterId(array $slotToRosterId): SleeperDraft
    {
        $this->slotToRosterId = $slotToRosterId;
        return $this;
    }

    public function getSettings(): SleeperDraftSettings
    {
        return $this->settings;
    }

    public function setSettings(SleeperDraftSettings $settings): SleeperDraft
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSeasonType(): string
    {
        return $this->seasonType;
    }

    public function setSeasonType(string $seasonType): SleeperDraft
    {
        $this->seasonType = $seasonType;
        return $this;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season): SleeperDraft
    {
        $this->season = $season;
        return $this;
    }

    public function getMetadata(): SleeperDraftMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(SleeperDraftMetadata $metadata): SleeperDraft
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getLeagueId(): ?string
    {
        return $this->leagueId;
    }

    public function setLeagueId(?string $leagueId): SleeperDraft
    {
        $this->leagueId = $leagueId;
        return $this;
    }

    public function getLastPicked(): ?int
    {
        return $this->lastPicked;
    }

    public function setLastPicked(?int $lastPicked): SleeperDraft
    {
        $this->lastPicked = $lastPicked;
        return $this;
    }

    public function getLastMessageTime(): ?int
    {
        return $this->lastMessageTime;
    }

    public function setLastMessageTime(?int $lastMessageTime): SleeperDraft
    {
        $this->lastMessageTime = $lastMessageTime;
        return $this;
    }

    public function getLastMessageId(): ?string
    {
        return $this->lastMessageId;
    }

    public function setLastMessageId(?string $lastMessageId): SleeperDraft
    {
        $this->lastMessageId = $lastMessageId;
        return $this;
    }

    public function getDraftOrder(): ?array
    {
        return $this->draftOrder;
    }

    public function setDraftOrder(?array $draftOrder): SleeperDraft
    {
        $this->draftOrder = $draftOrder;
        return $this;
    }

    public function getDraftId(): string
    {
        return $this->draftId;
    }

    public function setDraftId(string $draftId): SleeperDraft
    {
        $this->draftId = $draftId;
        return $this;
    }

    public function getCreators(): ?array
    {
        return $this->creators;
    }

    public function setCreators(?array $creators): SleeperDraft
    {
        $this->creators = $creators;
        return $this;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): SleeperDraft
    {
        $this->created = $created;
        return $this;
    }
}
