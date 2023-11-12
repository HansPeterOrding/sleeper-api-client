<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperLeagueSettings
{
    private ?int $wasAutoArchived = null;
    private ?int $waiverType = null;
    private ?int $waiverDayOfWeek = null;
    private ?int $waiverClearDays = null;
    private ?int $waiverBudget = null;
    private ?int $type = null;
    private ?int $tradeReviewDays = null;
    private ?int $tradeDeadline = null;
    private ?int $taxiYears = null;
    private ?int $taxiSlots = null;
    private ?int $taxiDeadline = null;
    private ?int $taxiAllowVets = null;
    private ?int $startWeek = null;
    private ?int $reserveSlots = null;
    private ?int $reserveAllowSus = null;
    private ?int $reserveAllowOut = null;
    private ?int $reserveAllowDoubtful = null;
    private ?int $playoffWeekStart = null;
    private ?int $playoffType = null;
    private ?int $playoffRoundType = null;
    private ?int $playoffTeams = null;
    private ?int $pickTrading = null;
    private ?int $offseasonAdds = null;
    private ?int $numTeams = null;
    private ?int $maxKeepers = null;
    private ?int $leg = null;
    private ?int $leagueAverageMatch = null;
    private ?int $lastScoredLeg = null;
    private ?int $lastReport = null;
    private ?int $draftRounds = null;
    private ?int $dailyWaiversHour = null;
    private ?int $dailyWaivers = null;
    private ?int $benchLock = null;

    public function getWasAutoArchived(): ?int
    {
        return $this->wasAutoArchived;
    }

    public function setWasAutoArchived(?int $wasAutoArchived): SleeperLeagueSettings
    {
        $this->wasAutoArchived = $wasAutoArchived;
        return $this;
    }

    public function getWaiverType(): ?int
    {
        return $this->waiverType;
    }

    public function setWaiverType(?int $waiverType): SleeperLeagueSettings
    {
        $this->waiverType = $waiverType;
        return $this;
    }

    public function getWaiverDayOfWeek(): ?int
    {
        return $this->waiverDayOfWeek;
    }

    public function setWaiverDayOfWeek(?int $waiverDayOfWeek): SleeperLeagueSettings
    {
        $this->waiverDayOfWeek = $waiverDayOfWeek;
        return $this;
    }

    public function getWaiverClearDays(): ?int
    {
        return $this->waiverClearDays;
    }

    public function setWaiverClearDays(?int $waiverClearDays): SleeperLeagueSettings
    {
        $this->waiverClearDays = $waiverClearDays;
        return $this;
    }

    public function getWaiverBudget(): ?int
    {
        return $this->waiverBudget;
    }

    public function setWaiverBudget(?int $waiverBudget): SleeperLeagueSettings
    {
        $this->waiverBudget = $waiverBudget;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): SleeperLeagueSettings
    {
        $this->type = $type;
        return $this;
    }

    public function getTradeReviewDays(): ?int
    {
        return $this->tradeReviewDays;
    }

    public function setTradeReviewDays(?int $tradeReviewDays): SleeperLeagueSettings
    {
        $this->tradeReviewDays = $tradeReviewDays;
        return $this;
    }

    public function getTradeDeadline(): ?int
    {
        return $this->tradeDeadline;
    }

    public function setTradeDeadline(?int $tradeDeadline): SleeperLeagueSettings
    {
        $this->tradeDeadline = $tradeDeadline;
        return $this;
    }

    public function getTaxiYears(): ?int
    {
        return $this->taxiYears;
    }

    public function setTaxiYears(?int $taxiYears): SleeperLeagueSettings
    {
        $this->taxiYears = $taxiYears;
        return $this;
    }

    public function getTaxiSlots(): ?int
    {
        return $this->taxiSlots;
    }

    public function setTaxiSlots(?int $taxiSlots): SleeperLeagueSettings
    {
        $this->taxiSlots = $taxiSlots;
        return $this;
    }

    public function getTaxiDeadline(): ?int
    {
        return $this->taxiDeadline;
    }

    public function setTaxiDeadline(?int $taxiDeadline): SleeperLeagueSettings
    {
        $this->taxiDeadline = $taxiDeadline;
        return $this;
    }

    public function getTaxiAllowVets(): ?int
    {
        return $this->taxiAllowVets;
    }

    public function setTaxiAllowVets(?int $taxiAllowVets): SleeperLeagueSettings
    {
        $this->taxiAllowVets = $taxiAllowVets;
        return $this;
    }

    public function getStartWeek(): ?int
    {
        return $this->startWeek;
    }

    public function setStartWeek(?int $startWeek): SleeperLeagueSettings
    {
        $this->startWeek = $startWeek;
        return $this;
    }

    public function getReserveSlots(): ?int
    {
        return $this->reserveSlots;
    }

    public function setReserveSlots(?int $reserveSlots): SleeperLeagueSettings
    {
        $this->reserveSlots = $reserveSlots;
        return $this;
    }

    public function getReserveAllowSus(): ?int
    {
        return $this->reserveAllowSus;
    }

    public function setReserveAllowSus(?int $reserveAllowSus): SleeperLeagueSettings
    {
        $this->reserveAllowSus = $reserveAllowSus;
        return $this;
    }

    public function getReserveAllowOut(): ?int
    {
        return $this->reserveAllowOut;
    }

    public function setReserveAllowOut(?int $reserveAllowOut): SleeperLeagueSettings
    {
        $this->reserveAllowOut = $reserveAllowOut;
        return $this;
    }

    public function getReserveAllowDoubtful(): ?int
    {
        return $this->reserveAllowDoubtful;
    }

    public function setReserveAllowDoubtful(?int $reserveAllowDoubtful): SleeperLeagueSettings
    {
        $this->reserveAllowDoubtful = $reserveAllowDoubtful;
        return $this;
    }

    public function getPlayoffWeekStart(): ?int
    {
        return $this->playoffWeekStart;
    }

    public function setPlayoffWeekStart(?int $playoffWeekStart): SleeperLeagueSettings
    {
        $this->playoffWeekStart = $playoffWeekStart;
        return $this;
    }

    public function getPlayoffType(): ?int
    {
        return $this->playoffType;
    }

    public function setPlayoffType(?int $playoffType): SleeperLeagueSettings
    {
        $this->playoffType = $playoffType;
        return $this;
    }

    public function getPlayoffRoundType(): ?int
    {
        return $this->playoffRoundType;
    }

    public function setPlayoffRoundType(?int $playoffRoundType): SleeperLeagueSettings
    {
        $this->playoffRoundType = $playoffRoundType;
        return $this;
    }

    public function getPlayoffTeams(): ?int
    {
        return $this->playoffTeams;
    }

    public function setPlayoffTeams(?int $playoffTeams): SleeperLeagueSettings
    {
        $this->playoffTeams = $playoffTeams;
        return $this;
    }

    public function getPickTrading(): ?int
    {
        return $this->pickTrading;
    }

    public function setPickTrading(?int $pickTrading): SleeperLeagueSettings
    {
        $this->pickTrading = $pickTrading;
        return $this;
    }

    public function getOffseasonAdds(): ?int
    {
        return $this->offseasonAdds;
    }

    public function setOffseasonAdds(?int $offseasonAdds): SleeperLeagueSettings
    {
        $this->offseasonAdds = $offseasonAdds;
        return $this;
    }

    public function getNumTeams(): ?int
    {
        return $this->numTeams;
    }

    public function setNumTeams(?int $numTeams): SleeperLeagueSettings
    {
        $this->numTeams = $numTeams;
        return $this;
    }

    public function getMaxKeepers(): ?int
    {
        return $this->maxKeepers;
    }

    public function setMaxKeepers(?int $maxKeepers): SleeperLeagueSettings
    {
        $this->maxKeepers = $maxKeepers;
        return $this;
    }

    public function getLeg(): ?int
    {
        return $this->leg;
    }

    public function setLeg(?int $leg): SleeperLeagueSettings
    {
        $this->leg = $leg;
        return $this;
    }

    public function getLeagueAverageMatch(): ?int
    {
        return $this->leagueAverageMatch;
    }

    public function setLeagueAverageMatch(?int $leagueAverageMatch): SleeperLeagueSettings
    {
        $this->leagueAverageMatch = $leagueAverageMatch;
        return $this;
    }

    public function getLastScoredLeg(): ?int
    {
        return $this->lastScoredLeg;
    }

    public function setLastScoredLeg(?int $lastScoredLeg): SleeperLeagueSettings
    {
        $this->lastScoredLeg = $lastScoredLeg;
        return $this;
    }

    public function getLastReport(): ?int
    {
        return $this->lastReport;
    }

    public function setLastReport(?int $lastReport): SleeperLeagueSettings
    {
        $this->lastReport = $lastReport;
        return $this;
    }

    public function getDraftRounds(): ?int
    {
        return $this->draftRounds;
    }

    public function setDraftRounds(?int $draftRounds): SleeperLeagueSettings
    {
        $this->draftRounds = $draftRounds;
        return $this;
    }

    public function getDailyWaiversHour(): ?int
    {
        return $this->dailyWaiversHour;
    }

    public function setDailyWaiversHour(?int $dailyWaiversHour): SleeperLeagueSettings
    {
        $this->dailyWaiversHour = $dailyWaiversHour;
        return $this;
    }

    public function getDailyWaivers(): ?int
    {
        return $this->dailyWaivers;
    }

    public function setDailyWaivers(?int $dailyWaivers): SleeperLeagueSettings
    {
        $this->dailyWaivers = $dailyWaivers;
        return $this;
    }

    public function getBenchLock(): ?int
    {
        return $this->benchLock;
    }

    public function setBenchLock(?int $benchLock): SleeperLeagueSettings
    {
        $this->benchLock = $benchLock;
        return $this;
    }
}
