<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperPlayoffMatchupSource
{
    private ?int $w = null;

    private ?int $l = null;

    public function getW(): ?int
    {
        return $this->w;
    }

    public function setW(?int $w): SleeperPlayoffMatchupSource
    {
        $this->w = $w;
        return $this;
    }

    public function getL(): ?int
    {
        return $this->l;
    }

    public function setL(?int $l): SleeperPlayoffMatchupSource
    {
        $this->l = $l;
        return $this;
    }
}
