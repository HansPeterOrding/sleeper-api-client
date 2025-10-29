<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTransactionWaiverBudget
{
    private ?int $sender = null;

    private ?int $receiver = null;

    private ?int $amount = null;

    public function getSender(): ?int
    {
        return $this->sender;
    }

    public function setSender(?int $sender): SleeperTransactionWaiverBudget
    {
        $this->sender = $sender;
        return $this;
    }

    public function getReceiver(): ?int
    {
        return $this->receiver;
    }

    public function setReceiver(?int $receiver): SleeperTransactionWaiverBudget
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): SleeperTransactionWaiverBudget
    {
        $this->amount = $amount;
        return $this;
    }
}
