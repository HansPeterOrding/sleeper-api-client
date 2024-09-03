<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTransactionSettings
{
    private ?int $waiverBid = null;

    private ?int $seq = null;

    private ?int $priority = null;

    public function getWaiverBid(): ?int
    {
        return $this->waiverBid;
    }

    public function setWaiverBid(?int $waiverBid): SleeperTransactionSettings
    {
        $this->waiverBid = $waiverBid;
        return $this;
    }

    public function getSeq(): ?int
    {
        return $this->seq;
    }

    public function setSeq(?int $seq): SleeperTransactionSettings
    {
        $this->seq = $seq;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): SleeperTransactionSettings
    {
        $this->priority = $priority;
        return $this;
    }
}
