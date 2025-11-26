<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperRosterMetadata
{
    private ?string $allowPnInactiveStarters = null;
    private ?string $allowPnPlayerInjuryStatus = null;
    private ?string $allowPnScoring = null;
    private ?string $record = null;
    private ?string $restrictPnScoringStartersOnly = null;
    private ?string $streak = null;
    /**
     * @var array<string,string> playerId => nickname
     */
    private array $playerNicknames = [];

    public function getAllowPnInactiveStarters(): ?string
    {
        return $this->allowPnInactiveStarters;
    }

    public function setAllowPnInactiveStarters(?string $allowPnInactiveStarters): SleeperRosterMetadata
    {
        $this->allowPnInactiveStarters = $allowPnInactiveStarters;
        return $this;
    }

    public function getAllowPnPlayerInjuryStatus(): ?string
    {
        return $this->allowPnPlayerInjuryStatus;
    }

    public function setAllowPnPlayerInjuryStatus(?string $allowPnPlayerInjuryStatus): SleeperRosterMetadata
    {
        $this->allowPnPlayerInjuryStatus = $allowPnPlayerInjuryStatus;
        return $this;
    }

    public function getAllowPnScoring(): ?string
    {
        return $this->allowPnScoring;
    }

    public function setAllowPnScoring(?string $allowPnScoring): SleeperRosterMetadata
    {
        $this->allowPnScoring = $allowPnScoring;
        return $this;
    }

    public function getRecord(): ?string
    {
        return $this->record;
    }

    public function setRecord(?string $record): SleeperRosterMetadata
    {
        $this->record = $record;
        return $this;
    }

    public function getRestrictPnScoringStartersOnly(): ?string
    {
        return $this->restrictPnScoringStartersOnly;
    }

    public function setRestrictPnScoringStartersOnly(?string $restrictPnScoringStartersOnly): SleeperRosterMetadata
    {
        $this->restrictPnScoringStartersOnly = $restrictPnScoringStartersOnly;
        return $this;
    }

    public function getStreak(): ?string
    {
        return $this->streak;
    }

    public function setStreak(?string $streak): SleeperRosterMetadata
    {
        $this->streak = $streak;
        return $this;
    }

    /**
     * @return array<string,string>
     */
    public function getPlayerNicknames(): array
    {
        return $this->playerNicknames;
    }

    /**
     * @param array<string,string> $playerNicknames
     */
    public function setPlayerNicknames(array $playerNicknames): self
    {
        $this->playerNicknames = $playerNicknames;
        return $this;
    }

    public function addPlayerNickname(string $playerId, string $nickname): self
    {
        $this->playerNicknames[$playerId] = $nickname;
        return $this;
    }
}
