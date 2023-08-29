<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperDraftSettings
{
    private ?int $teams = null;
<<<<<<< Updated upstream

    private ?int $slotsWr = null;

    private ?int $slotsTe = null;

    private ?int $slotsSuperFlex = null;

    private ?int $slotsRecFlex = null;

    private ?int $slotsRb = null;

    private ?int $slotsQb = null;

    private ?int $slotsLb = null;

    private ?int $slotsK = null;

    private ?int $slotsIdpFlex = null;

    private ?int $slotsFlex = null;

    private ?int $slotsDl = null;

    private ?int $slotsDb = null;

    private ?int $slotsDef = null;

    private ?int $slotsBn = null;

    private ?int $rounds = null;

    private ?int $reversalRound = null;

    private ?int $playerType = null;

    private ?int $pickTimer = null;

    private ?int $nominationTimer = null;

    private ?int $enforcePositionLimits = null;

    private ?int $cpuAutopick = null;

=======
    private ?int $slotsWr = null;
    private ?int $slotsTe = null;
    private ?int $slotsSuperFlex = null;
    private ?int $slotsRecFlex = null;
    private ?int $slotsRb = null;
    private ?int $slotsQb = null;
    private ?int $slotsLb = null;
    private ?int $slotsK = null;
    private ?int $slotsIdpFlex = null;
    private ?int $slotsFlex = null;
    private ?int $slotsDl = null;
    private ?int $slotsDb = null;
    private ?int $slotsDef = null;
    private ?int $slotsBn = null;
    private ?int $rounds = null;
    private ?int $reversalRound = null;
    private ?int $playerType = null;
    private ?int $pickTimer = null;
    private ?int $nominationTimer = null;
    private ?int $enforcePositionLimits = null;
    private ?int $cpuAutopick = null;
>>>>>>> Stashed changes
    private ?int $alphaSort = null;

    public function getTeams(): ?int
    {
        return $this->teams;
    }

    public function setTeams(?int $teams): SleeperDraftSettings
    {
        $this->teams = $teams;
        return $this;
    }

    public function getSlotsWr(): ?int
    {
        return $this->slotsWr;
    }

    public function setSlotsWr(?int $slotsWr): SleeperDraftSettings
    {
        $this->slotsWr = $slotsWr;
        return $this;
    }

    public function getSlotsTe(): ?int
    {
        return $this->slotsTe;
    }

    public function setSlotsTe(?int $slotsTe): SleeperDraftSettings
    {
        $this->slotsTe = $slotsTe;
        return $this;
    }

    public function getSlotsSuperFlex(): ?int
    {
        return $this->slotsSuperFlex;
    }

    public function setSlotsSuperFlex(?int $slotsSuperFlex): SleeperDraftSettings
    {
        $this->slotsSuperFlex = $slotsSuperFlex;
        return $this;
    }

    public function getSlotsRecFlex(): ?int
    {
        return $this->slotsRecFlex;
    }

    public function setSlotsRecFlex(?int $slotsRecFlex): SleeperDraftSettings
    {
        $this->slotsRecFlex = $slotsRecFlex;
        return $this;
    }

    public function getSlotsRb(): ?int
    {
        return $this->slotsRb;
    }

    public function setSlotsRb(?int $slotsRb): SleeperDraftSettings
    {
        $this->slotsRb = $slotsRb;
        return $this;
    }

    public function getSlotsQb(): ?int
    {
        return $this->slotsQb;
    }

    public function setSlotsQb(?int $slotsQb): SleeperDraftSettings
    {
        $this->slotsQb = $slotsQb;
        return $this;
    }

    public function getSlotsLb(): ?int
    {
        return $this->slotsLb;
    }

    public function setSlotsLb(?int $slotsLb): SleeperDraftSettings
    {
        $this->slotsLb = $slotsLb;
        return $this;
    }

    public function getSlotsK(): ?int
    {
        return $this->slotsK;
    }

    public function setSlotsK(?int $slotsK): SleeperDraftSettings
    {
        $this->slotsK = $slotsK;
        return $this;
    }

    public function getSlotsIdpFlex(): ?int
    {
        return $this->slotsIdpFlex;
    }

    public function setSlotsIdpFlex(?int $slotsIdpFlex): SleeperDraftSettings
    {
        $this->slotsIdpFlex = $slotsIdpFlex;
        return $this;
    }

    public function getSlotsFlex(): ?int
    {
        return $this->slotsFlex;
    }

    public function setSlotsFlex(?int $slotsFlex): SleeperDraftSettings
    {
        $this->slotsFlex = $slotsFlex;
        return $this;
    }

    public function getSlotsDl(): ?int
    {
        return $this->slotsDl;
    }

    public function setSlotsDl(?int $slotsDl): SleeperDraftSettings
    {
        $this->slotsDl = $slotsDl;
        return $this;
    }

    public function getSlotsDb(): ?int
    {
        return $this->slotsDb;
    }

    public function setSlotsDb(?int $slotsDb): SleeperDraftSettings
    {
        $this->slotsDb = $slotsDb;
        return $this;
    }

    public function getSlotsDef(): ?int
    {
        return $this->slotsDef;
    }

    public function setSlotsDef(?int $slotsDef): SleeperDraftSettings
    {
        $this->slotsDef = $slotsDef;
        return $this;
    }

    public function getSlotsBn(): ?int
    {
        return $this->slotsBn;
    }

    public function setSlotsBn(?int $slotsBn): SleeperDraftSettings
    {
        $this->slotsBn = $slotsBn;
        return $this;
    }

    public function getRounds(): ?int
    {
        return $this->rounds;
    }

    public function setRounds(?int $rounds): SleeperDraftSettings
    {
        $this->rounds = $rounds;
        return $this;
    }

    public function getReversalRound(): ?int
    {
        return $this->reversalRound;
    }

    public function setReversalRound(?int $reversalRound): SleeperDraftSettings
    {
        $this->reversalRound = $reversalRound;
        return $this;
    }

    public function getPlayerType(): ?int
    {
        return $this->playerType;
    }

    public function setPlayerType(?int $playerType): SleeperDraftSettings
    {
        $this->playerType = $playerType;
        return $this;
    }

    public function getPickTimer(): ?int
    {
        return $this->pickTimer;
    }

    public function setPickTimer(?int $pickTimer): SleeperDraftSettings
    {
        $this->pickTimer = $pickTimer;
        return $this;
    }

    public function getNominationTimer(): ?int
    {
        return $this->nominationTimer;
    }

    public function setNominationTimer(?int $nominationTimer): SleeperDraftSettings
    {
        $this->nominationTimer = $nominationTimer;
        return $this;
    }

    public function getEnforcePositionLimits(): ?int
    {
        return $this->enforcePositionLimits;
    }

    public function setEnforcePositionLimits(?int $enforcePositionLimits): SleeperDraftSettings
    {
        $this->enforcePositionLimits = $enforcePositionLimits;
        return $this;
    }

    public function getCpuAutopick(): ?int
    {
        return $this->cpuAutopick;
    }

    public function setCpuAutopick(?int $cpuAutopick): SleeperDraftSettings
    {
        $this->cpuAutopick = $cpuAutopick;
        return $this;
    }

    public function getAlphaSort(): ?int
    {
        return $this->alphaSort;
    }

    public function setAlphaSort(?int $alphaSort): SleeperDraftSettings
    {
        $this->alphaSort = $alphaSort;
        return $this;
    }
}
