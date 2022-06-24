<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperTransactionMetadata
{
    private string $notes;

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): SleeperTransactionMetadata
    {
        $this->notes = $notes;
        return $this;
    }
}