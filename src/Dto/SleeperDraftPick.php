<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperDraftPick 
{
    private int $round;

    private int $rosterId;

    private ?string $playerId;

    private ?string $pickedBy;

    private int $pickNo;

    private SleeperDraftPickMetadata $metadata;

    private ?bool $isKeeper;

    private int $draftSlot;

    private string $draftId;

    public function getRound(): int
    {
        return $this->round;
    }

    public function setRound(int $round): SleeperDraftPick
    {
        $this->round = $round;
        return $this;
    }

    public function getRosterId(): int
    {
        return $this->rosterId;
    }

    public function setRosterId(int $rosterId): SleeperDraftPick
    {
        $this->rosterId = $rosterId;
        return $this;
    }

    public function getPlayerId(): ?string
    {
        return $this->playerId;
    }

    public function setPlayerId(?string $playerId): SleeperDraftPick
    {
        $this->playerId = $playerId;
        return $this;
    }

    public function getPickedBy(): ?string
    {
        return $this->pickedBy;
    }

    public function setPickedBy(?string $pickedBy): SleeperDraftPick
    {
        $this->pickedBy = $pickedBy;
        return $this;
    }

    public function getPickNo(): int
    {
        return $this->pickNo;
    }

    public function setPickNo(int $pickNo): SleeperDraftPick
    {
        $this->pickNo = $pickNo;
        return $this;
    }

    public function getMetadata(): SleeperDraftPickMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(SleeperDraftPickMetadata $metadata): SleeperDraftPick
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getIsKeeper(): ?bool
    {
        return $this->isKeeper;
    }

    public function setIsKeeper(?bool $isKeeper): SleeperDraftPick
    {
        $this->isKeeper = $isKeeper;
        return $this;
    }

    public function getDraftSlot(): int
    {
        return $this->draftSlot;
    }

    public function setDraftSlot(int $draftSlot): SleeperDraftPick
    {
        $this->draftSlot = $draftSlot;
        return $this;
    }

    public function getDraftId(): string
    {
        return $this->draftId;
    }

    public function setDraftId(string $draftId): SleeperDraftPick
    {
        $this->draftId = $draftId;
        return $this;
    }
}
