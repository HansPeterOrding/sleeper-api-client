<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

use DateTime;

class SleeperTransaction
{
    private SleeperTransactionWaiverBudget $waiverBudget;

    private string $type;

    private string $transactionId;

    private int $statusUpdated;

    private string $status;

    private SleeperTransactionSettings $settings;

    private ?array $rosterIds;

    private ?SleeperTransactionMetadata $metadata;

    private int $leg;

    private ?array $drops;

    /**
     * @var SleeperTradedPick[]
     */
    private array $draftPicks;

    private string $creator;

    private int $created;

    private ?array $consenterIds;

    private ?array $adds;

    public function __construct()
    {
        $this->waiverBudget = new SleeperTransactionWaiverBudget();
        $this->settings = new SleeperTransactionSettings();
        $this->metadata = new SleeperTransactionMetadata();
    }

    public function getWaiverBudget(): SleeperTransactionWaiverBudget
    {
        return $this->waiverBudget;
    }

    public function setWaiverBudget(SleeperTransactionWaiverBudget $waiverBudget): SleeperTransaction
    {
        $this->waiverBudget = $waiverBudget;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): SleeperTransaction
    {
        $this->type = $type;
        return $this;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): SleeperTransaction
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getStatusUpdated(): int
    {
        return $this->statusUpdated;
    }

    public function setStatusUpdated(int $statusUpdated): SleeperTransaction
    {
        $this->statusUpdated = $statusUpdated;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): SleeperTransaction
    {
        $this->status = $status;
        return $this;
    }

    public function getSettings(): SleeperTransactionSettings
    {
        return $this->settings;
    }

    public function setSettings(SleeperTransactionSettings $settings): SleeperTransaction
    {
        $this->settings = $settings;
        return $this;
    }

    public function getRosterIds(): ?array
    {
        return $this->rosterIds;
    }

    public function setRosterIds(?array $rosterIds): SleeperTransaction
    {
        $this->rosterIds = $rosterIds;
        return $this;
    }

    public function getMetadata(): ?SleeperTransactionMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(?SleeperTransactionMetadata $metadata): SleeperTransaction
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getLeg(): int
    {
        return $this->leg;
    }

    public function setLeg(int $leg): SleeperTransaction
    {
        $this->leg = $leg;
        return $this;
    }

    public function getDrops(): ?array
    {
        return $this->drops;
    }

    public function setDrops(?array $drops): SleeperTransaction
    {
        $this->drops = $drops;
        return $this;
    }

    public function getDraftPicks(): array
    {
        return $this->draftPicks;
    }

    public function setDraftPicks(array $draftPicks): SleeperTransaction
    {
        $this->draftPicks = $draftPicks;
        return $this;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): SleeperTransaction
    {
        $this->creator = $creator;
        return $this;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): SleeperTransaction
    {
        $this->created = $created;
        return $this;
    }

    public function getConsenterIds(): ?array
    {
        return $this->consenterIds;
    }

    public function setConsenterIds(?array $consenterIds): SleeperTransaction
    {
        $this->consenterIds = $consenterIds;
        return $this;
    }

    public function getAdds(): ?array
    {
        return $this->adds;
    }

    public function setAdds(?array $adds): SleeperTransaction
    {
        $this->adds = $adds;
        return $this;
    }
}
