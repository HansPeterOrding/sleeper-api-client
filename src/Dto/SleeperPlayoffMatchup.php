<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperPlayoffMatchup
{
    private int $r;

    private int $m;

    private ?int $t1 = null;

    private ?SleeperPlayoffMatchupSource $t1From = null;

    private ?int $t2 = null;

    private ?SleeperPlayoffMatchupSource $t2From = null;

    private ?int $w = null;

    private ?int $l = null;

    private ?int $p = null;

    public function getR(): int
    {
        return $this->r;
    }

    public function setR(int $r): SleeperPlayoffMatchup
    {
        $this->r = $r;
        return $this;
    }

    public function getM(): int
    {
        return $this->m;
    }

    public function setM(int $m): SleeperPlayoffMatchup
    {
        $this->m = $m;
        return $this;
    }

    public function getT1(): ?int
    {
        return $this->t1;
    }

    public function setT1(?int $t1): SleeperPlayoffMatchup
    {
        $this->t1 = $t1;
        return $this;
    }

    public function getT1From(): ?SleeperPlayoffMatchupSource
    {
        return $this->t1From;
    }

    public function setT1From(?SleeperPlayoffMatchupSource $t1From): SleeperPlayoffMatchup
    {
        $this->t1From = $t1From;
        return $this;
    }

    public function getT2(): ?int
    {
        return $this->t2;
    }

    public function setT2(?int $t2): SleeperPlayoffMatchup
    {
        $this->t2 = $t2;
        return $this;
    }

    public function getT2From(): ?SleeperPlayoffMatchupSource
    {
        return $this->t2From;
    }

    public function setT2From(?SleeperPlayoffMatchupSource $t2From): SleeperPlayoffMatchup
    {
        $this->t2From = $t2From;
        return $this;
    }

    public function getW(): ?int
    {
        return $this->w;
    }

    public function setW(?int $w): SleeperPlayoffMatchup
    {
        $this->w = $w;
        return $this;
    }

    public function getL(): ?int
    {
        return $this->l;
    }

    public function setL(?int $l): SleeperPlayoffMatchup
    {
        $this->l = $l;
        return $this;
    }

    public function getP(): ?int
    {
        return $this->p;
    }

    public function setP(?int $p): SleeperPlayoffMatchup
    {
        $this->p = $p;
        return $this;
    }
}
