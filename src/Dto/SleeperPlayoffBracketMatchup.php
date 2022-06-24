<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperPlayoffBracketMatchup
{
    private int $r;

    private int $m;

    private ?int $t1;

    private ?int $t1From;

    private ?int $t2;

    private ?int $t2From;

    private ?int $w;

    private ?int $l;

    private ?int $p;

    public function getR(): int
    {
        return $this->r;
    }

    public function setR(int $r): SleeperPlayoffBracketMatchup
    {
        $this->r = $r;
        return $this;
    }

    public function getM(): int
    {
        return $this->m;
    }

    public function setM(int $m): SleeperPlayoffBracketMatchup
    {
        $this->m = $m;
        return $this;
    }

    public function getT1(): ?int
    {
        return $this->t1;
    }

    public function setT1(?int $t1): SleeperPlayoffBracketMatchup
    {
        $this->t1 = $t1;
        return $this;
    }

    public function getT1From(): ?int
    {
        return $this->t1From;
    }

    public function setT1From(?int $t1From): SleeperPlayoffBracketMatchup
    {
        $this->t1From = $t1From;
        return $this;
    }

    public function getT2(): ?int
    {
        return $this->t2;
    }

    public function setT2(?int $t2): SleeperPlayoffBracketMatchup
    {
        $this->t2 = $t2;
        return $this;
    }

    public function getT2From(): ?int
    {
        return $this->t2From;
    }

    public function setT2From(?int $t2From): SleeperPlayoffBracketMatchup
    {
        $this->t2From = $t2From;
        return $this;
    }

    public function getW(): ?int
    {
        return $this->w;
    }

    public function setW(?int $w): SleeperPlayoffBracketMatchup
    {
        $this->w = $w;
        return $this;
    }

    public function getL(): ?int
    {
        return $this->l;
    }

    public function setL(?int $l): SleeperPlayoffBracketMatchup
    {
        $this->l = $l;
        return $this;
    }

    public function getP(): ?int
    {
        return $this->p;
    }

    public function setP(?int $p): SleeperPlayoffBracketMatchup
    {
        $this->p = $p;
        return $this;
    }
}