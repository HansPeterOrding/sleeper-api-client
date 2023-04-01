<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperLeague
{
    private int $totalRosters;

    private string $status;

    private string $sport;

    private SleeperLeagueSettings $settings;

    private string $seasonType;

    private string $season;

    private SleeperLeagueScoringSettings $scoringSettings;

    private array $rosterPositions = [];

    private ?string $previousLeagueId = null;

    private string $name;

    private string $leagueId;

    private ?string $draftId = null;

    private ?string $avatar = null;

    public function __construct()
    {
        $this->settings = new SleeperLeagueSettings();
        $this->scoringSettings = new SleeperLeagueScoringSettings();
    }

    public function getTotalRosters(): int
    {
        return $this->totalRosters;
    }

    public function setTotalRosters(int $totalRosters): SleeperLeague
    {
        $this->totalRosters = $totalRosters;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): SleeperLeague
    {
        $this->status = $status;
        return $this;
    }

    public function getSport(): string
    {
        return $this->sport;
    }

    public function setSport(string $sport): SleeperLeague
    {
        $this->sport = $sport;
        return $this;
    }

    public function getSettings(): SleeperLeagueSettings
    {
        return $this->settings;
    }

    public function setSettings(SleeperLeagueSettings $settings): SleeperLeague
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSeasonType(): string
    {
        return $this->seasonType;
    }

    public function setSeasonType(string $seasonType): SleeperLeague
    {
        $this->seasonType = $seasonType;
        return $this;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season): SleeperLeague
    {
        $this->season = $season;
        return $this;
    }

    public function getScoringSettings(): SleeperLeagueScoringSettings
    {
        return $this->scoringSettings;
    }

    public function setScoringSettings(SleeperLeagueScoringSettings $scoringSettings): SleeperLeague
    {
        $this->scoringSettings = $scoringSettings;
        return $this;
    }

    public function getRosterPositions(): array
    {
        return $this->rosterPositions;
    }

    public function setRosterPositions(array $rosterPositions): SleeperLeague
    {
        $this->rosterPositions = $rosterPositions;
        return $this;
    }

    public function getPreviousLeagueId(): ?string
    {
        return $this->previousLeagueId;
    }

    public function setPreviousLeagueId(?string $previousLeagueId): SleeperLeague
    {
        $this->previousLeagueId = $previousLeagueId;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): SleeperLeague
    {
        $this->name = $name;
        return $this;
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function setLeagueId(string $leagueId): SleeperLeague
    {
        $this->leagueId = $leagueId;
        return $this;
    }

    public function getDraftId(): ?string
    {
        return $this->draftId;
    }

    public function setDraftId(?string $draftId): SleeperLeague
    {
        $this->draftId = $draftId;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): SleeperLeague
    {
        $this->avatar = $avatar;
        return $this;
    }
}
