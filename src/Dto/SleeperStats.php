<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperStats
{
    // Games
    private ?float $gp = null;
    private ?float $gmsActive = null;
    private ?float $gs = null;

    // Points
    private ?float $ptsStd = null;
    private ?float $ptsHalfPpr = null;
    private ?float $ptsPpr = null;

    // Ranks
    private ?float $rankStd = null;
    private ?float $rankPpr = null;
    private ?float $posRankStd = null;
    private ?float $posRankPpr = null;

    // Snap
    private ?float $offSnp = null;
    private ?float $defSnp = null;
    private ?float $tmOffSnp = null;
    private ?float $tmDefSnp = null;
    private ?float $tmStSnp = null;

    // Penalty
    private ?float $penalty = null;
    private ?float $penaltyYd = null;

    // ADP
    private ?float $posAdpDdPpr = null;
    private ?float $adpDdPpr = null;

    // Passing
    private ?float $passYd = null;
    private ?float $passTd = null;
    private ?float $passFd = null;
    private ?float $pass2pt = null;
    private ?float $passInt = null;
    private ?float $passIntTd = null;
    private ?float $passCmp = null;
    private ?float $passInc = null;
    private ?float $passAtt = null;
    private ?float $passSack = null;
    private ?float $passCmp40p = null;
    private ?float $passTd40p = null;
    private ?float $passTd50p = null;
    private ?float $cmpPct = null;

    // Rushing
    private ?float $rushYd = null;
    private ?float $rushTd = null;
    private ?float $rushFd = null;
    private ?float $rush2pt = null;
    private ?float $rushAtt = null;
    private ?float $rush40p = null;
    private ?float $rushTd40p = null;
    private ?float $rushTd50p = null;

    // Receiving
    private ?float $rec = null;
    private ?float $recYd = null;
    private ?float $recTd = null;
    private ?float $recFd = null;
    private ?float $rec2pt = null;
    private ?float $rec04 = null;
    private ?float $rec59 = null;
    private ?float $rec1019 = null;
    private ?float $rec2029 = null;
    private ?float $rec3039 = null;
    private ?float $rec40p = null;
    private ?float $recTd40p = null;
    private ?float $recTd50p = null;
    private ?float $bonusRecRb = null;
    private ?float $bonusRecWr = null;
    private ?float $bonusRecTe = null;
    private ?float $recTdLng = null;
    private ?float $recRzTgt = null;
    private ?float $recYpt = null;
    private ?float $recAirYd = null;
    private ?float $recYpr = null;
    private ?float $recDrop = null;
    private ?float $recLng = null;
    private ?float $recTgt = null;
    private ?float $recYar = null;

    // Kicking
    private ?float $fgm = null;
    private ?float $fgm019 = null;
    private ?float $fgm2029 = null;
    private ?float $fgm3039 = null;
    private ?float $fgm4049 = null;
    private ?float $fgm50p = null;
    private ?float $fgmYds = null;
    private ?float $fgmYdsOver30 = null;
    private ?float $xpm = null;
    private ?float $fgmiss = null;
    private ?float $fgmiss019 = null;
    private ?float $fgmiss2029 = null;
    private ?float $fgmiss3039 = null;
    private ?float $fgmiss4049 = null;
    private ?float $fgmiss50p = null;
    private ?float $xpmiss = null;

    // Team defense
    private ?float $defTd = null;
    private ?float $ptsAllow0 = null;
    private ?float $ptsAllow16 = null;
    private ?float $ptsAllow713 = null;
    private ?float $ptsAllow1420 = null;
    private ?float $ptsAllow2127 = null;
    private ?float $ptsAllow2834 = null;
    private ?float $ptsAllow35p = null;
    private ?float $ptsAllow = null;
    private ?float $ydsAllow0100 = null;
    private ?float $ydsAllow100199 = null;
    private ?float $ydsAllow200299 = null;
    private ?float $ydsAllow300349 = null;
    private ?float $ydsAllow350399 = null;
    private ?float $ydsAllow400449 = null;
    private ?float $ydsAllow450499 = null;
    private ?float $ydsAllow500549 = null;
    private ?float $ydsAllow550p = null;
    private ?float $ydsAllow = null;
    private ?float $def3AndOut = null;
    private ?float $def4AndStop = null;
    private ?float $qbHit = null;
    private ?float $sack = null;
    private ?float $sackYd = null;
    private ?float $int = null;
    private ?float $intRetYd = null;
    private ?float $fumRec = null;
    private ?float $fumRetYd = null;
    private ?float $tklLoss = null;
    private ?float $tklAst = null;
    private ?float $tklSolo = null;
    private ?float $tkl = null;
    private ?float $safe = null;
    private ?float $ff = null;
    private ?float $blkKick = null;
    private ?float $defForcedPunts = null;
    private ?float $defPassDef = null;
    private ?float $def2pt = null;
    private ?float $fgRetYd = null;
    private ?float $blkKickRetYd = null;
    private ?float $defFumTd = null;

    // Special Teams Defense
    private ?float $defStTd = null;
    private ?float $defStFf = null;
    private ?float $defStFumRec = null;
    private ?float $defStTklSolo = null;
    private ?float $defPrYd = null;
    private ?float $defKrYd = null;

    // Special Teams Player
    private ?float $stTd = null;
    private ?float $stFf = null;
    private ?float $stFumRec = null;
    private ?float $stTklSolo = null;
    private ?float $prYd = null;
    private ?float $krYd = null;
    private ?float $pr = null;

    // Misc
    private ?float $fum = null;
    private ?float $fumLost = null;
    private ?float $fumRecTd = null;

    // Bonus
    private ?float $bonusRushYd100 = null;
    private ?float $bonusRushYd200 = null;
    private ?float $bonusRecYd100 = null;
    private ?float $bonusRecYd200 = null;
    private ?float $bonusPassYd300 = null;
    private ?float $bonusPassYd400 = null;
    private ?float $bonusRushRecYd100 = null;
    private ?float $bonusRushRecYd200 = null;
    private ?float $bonusPassCmp25 = null;
    private ?float $bonusRushAtt20 = null;
    private ?float $bonusFdRb = null;
    private ?float $bonusFdWr = null;
    private ?float $bonusFdTe = null;
    private ?float $bonusFdQb = null;

    // IDP
    private ?float $idpDefTd = null;
    private ?float $idpSack = null;
    private ?float $idpSackYd = null;
    private ?float $idpQbHit = null;
    private ?float $idpTkl = null;
    private ?float $idpTklLoss = null;
    private ?float $idpBlkKick = null;
    private ?float $idpInt = null;
    private ?float $idpIntRetYd = null;
    private ?float $idpFumRec = null;
    private ?float $idpFumRetYd = null;
    private ?float $idpFf = null;
    private ?float $idpSafe = null;
    private ?float $idpTklAst = null;
    private ?float $idpTklSolo = null;
    private ?float $idpPassDef = null;
    private ?float $bonusTkl10p = null;
    private ?float $bonusSack2p = null;
    private ?float $idpPassDef3p = null;
    private ?float $bonusDefIntTd50p = null;
    private ?float $bonusDefFumTd50p = null;

    public function getGp(): ?float
    {
        return $this->gp;
    }

    public function setGp(?float $gp): SleeperStats
    {
        $this->gp = $gp;
        return $this;
    }

    public function getGmsActive(): ?float
    {
        return $this->gmsActive;
    }

    public function setGmsActive(?float $gmsActive): SleeperStats
    {
        $this->gmsActive = $gmsActive;
        return $this;
    }

    public function getGs(): ?float
    {
        return $this->gs;
    }

    public function setGs(?float $gs): SleeperStats
    {
        $this->gs = $gs;
        return $this;
    }

    public function getPtsStd(): ?float
    {
        return $this->ptsStd;
    }

    public function setPtsStd(?float $ptsStd): SleeperStats
    {
        $this->ptsStd = $ptsStd;
        return $this;
    }

    public function getPtsHalfPpr(): ?float
    {
        return $this->ptsHalfPpr;
    }

    public function setPtsHalfPpr(?float $ptsHalfPpr): SleeperStats
    {
        $this->ptsHalfPpr = $ptsHalfPpr;
        return $this;
    }

    public function getPtsPpr(): ?float
    {
        return $this->ptsPpr;
    }

    public function setPtsPpr(?float $ptsPpr): SleeperStats
    {
        $this->ptsPpr = $ptsPpr;
        return $this;
    }

    public function getRankStd(): ?float
    {
        return $this->rankStd;
    }

    public function setRankStd(?float $rankStd): SleeperStats
    {
        $this->rankStd = $rankStd;
        return $this;
    }

    public function getRankPpr(): ?float
    {
        return $this->rankPpr;
    }

    public function setRankPpr(?float $rankPpr): SleeperStats
    {
        $this->rankPpr = $rankPpr;
        return $this;
    }

    public function getPosRankStd(): ?float
    {
        return $this->posRankStd;
    }

    public function setPosRankStd(?float $posRankStd): SleeperStats
    {
        $this->posRankStd = $posRankStd;
        return $this;
    }

    public function getPosRankPpr(): ?float
    {
        return $this->posRankPpr;
    }

    public function setPosRankPpr(?float $posRankPpr): SleeperStats
    {
        $this->posRankPpr = $posRankPpr;
        return $this;
    }

    public function getOffSnp(): ?float
    {
        return $this->offSnp;
    }

    public function setOffSnp(?float $offSnp): SleeperStats
    {
        $this->offSnp = $offSnp;
        return $this;
    }

    public function getDefSnp(): ?float
    {
        return $this->defSnp;
    }

    public function setDefSnp(?float $defSnp): SleeperStats
    {
        $this->defSnp = $defSnp;
        return $this;
    }

    public function getTmOffSnp(): ?float
    {
        return $this->tmOffSnp;
    }

    public function setTmOffSnp(?float $tmOffSnp): SleeperStats
    {
        $this->tmOffSnp = $tmOffSnp;
        return $this;
    }

    public function getTmDefSnp(): ?float
    {
        return $this->tmDefSnp;
    }

    public function setTmDefSnp(?float $tmDefSnp): SleeperStats
    {
        $this->tmDefSnp = $tmDefSnp;
        return $this;
    }

    public function getTmStSnp(): ?float
    {
        return $this->tmStSnp;
    }

    public function setTmStSnp(?float $tmStSnp): SleeperStats
    {
        $this->tmStSnp = $tmStSnp;
        return $this;
    }

    public function getPenalty(): ?float
    {
        return $this->penalty;
    }

    public function setPenalty(?float $penalty): SleeperStats
    {
        $this->penalty = $penalty;
        return $this;
    }

    public function getPenaltyYd(): ?float
    {
        return $this->penaltyYd;
    }

    public function setPenaltyYd(?float $penaltyYd): SleeperStats
    {
        $this->penaltyYd = $penaltyYd;
        return $this;
    }

    public function getPosAdpDdPpr(): ?float
    {
        return $this->posAdpDdPpr;
    }

    public function setPosAdpDdPpr(?float $posAdpDdPpr): SleeperStats
    {
        $this->posAdpDdPpr = $posAdpDdPpr;
        return $this;
    }

    public function getAdpDdPpr(): ?float
    {
        return $this->adpDdPpr;
    }

    public function setAdpDdPpr(?float $adpDdPpr): SleeperStats
    {
        $this->adpDdPpr = $adpDdPpr;
        return $this;
    }

    public function getPassYd(): ?float
    {
        return $this->passYd;
    }

    public function setPassYd(?float $passYd): SleeperStats
    {
        $this->passYd = $passYd;
        return $this;
    }

    public function getPassTd(): ?float
    {
        return $this->passTd;
    }

    public function setPassTd(?float $passTd): SleeperStats
    {
        $this->passTd = $passTd;
        return $this;
    }

    public function getPassFd(): ?float
    {
        return $this->passFd;
    }

    public function setPassFd(?float $passFd): SleeperStats
    {
        $this->passFd = $passFd;
        return $this;
    }

    public function getPass2pt(): ?float
    {
        return $this->pass2pt;
    }

    public function setPass2pt(?float $pass2pt): SleeperStats
    {
        $this->pass2pt = $pass2pt;
        return $this;
    }

    public function getPassInt(): ?float
    {
        return $this->passInt;
    }

    public function setPassInt(?float $passInt): SleeperStats
    {
        $this->passInt = $passInt;
        return $this;
    }

    public function getPassIntTd(): ?float
    {
        return $this->passIntTd;
    }

    public function setPassIntTd(?float $passIntTd): SleeperStats
    {
        $this->passIntTd = $passIntTd;
        return $this;
    }

    public function getPassCmp(): ?float
    {
        return $this->passCmp;
    }

    public function setPassCmp(?float $passCmp): SleeperStats
    {
        $this->passCmp = $passCmp;
        return $this;
    }

    public function getPassInc(): ?float
    {
        return $this->passInc;
    }

    public function setPassInc(?float $passInc): SleeperStats
    {
        $this->passInc = $passInc;
        return $this;
    }

    public function getPassAtt(): ?float
    {
        return $this->passAtt;
    }

    public function setPassAtt(?float $passAtt): SleeperStats
    {
        $this->passAtt = $passAtt;
        return $this;
    }

    public function getPassSack(): ?float
    {
        return $this->passSack;
    }

    public function setPassSack(?float $passSack): SleeperStats
    {
        $this->passSack = $passSack;
        return $this;
    }

    public function getPassCmp40p(): ?float
    {
        return $this->passCmp40p;
    }

    public function setPassCmp40p(?float $passCmp40p): SleeperStats
    {
        $this->passCmp40p = $passCmp40p;
        return $this;
    }

    public function getPassTd40p(): ?float
    {
        return $this->passTd40p;
    }

    public function setPassTd40p(?float $passTd40p): SleeperStats
    {
        $this->passTd40p = $passTd40p;
        return $this;
    }

    public function getPassTd50p(): ?float
    {
        return $this->passTd50p;
    }

    public function setPassTd50p(?float $passTd50p): SleeperStats
    {
        $this->passTd50p = $passTd50p;
        return $this;
    }

    public function getCmpPct(): ?float
    {
        return $this->cmpPct;
    }

    public function setCmpPct(?float $cmpPct): SleeperStats
    {
        $this->cmpPct = $cmpPct;
        return $this;
    }

    public function getRushYd(): ?float
    {
        return $this->rushYd;
    }

    public function setRushYd(?float $rushYd): SleeperStats
    {
        $this->rushYd = $rushYd;
        return $this;
    }

    public function getRushTd(): ?float
    {
        return $this->rushTd;
    }

    public function setRushTd(?float $rushTd): SleeperStats
    {
        $this->rushTd = $rushTd;
        return $this;
    }

    public function getRushFd(): ?float
    {
        return $this->rushFd;
    }

    public function setRushFd(?float $rushFd): SleeperStats
    {
        $this->rushFd = $rushFd;
        return $this;
    }

    public function getRush2pt(): ?float
    {
        return $this->rush2pt;
    }

    public function setRush2pt(?float $rush2pt): SleeperStats
    {
        $this->rush2pt = $rush2pt;
        return $this;
    }

    public function getRushAtt(): ?float
    {
        return $this->rushAtt;
    }

    public function setRushAtt(?float $rushAtt): SleeperStats
    {
        $this->rushAtt = $rushAtt;
        return $this;
    }

    public function getRush40p(): ?float
    {
        return $this->rush40p;
    }

    public function setRush40p(?float $rush40p): SleeperStats
    {
        $this->rush40p = $rush40p;
        return $this;
    }

    public function getRushTd40p(): ?float
    {
        return $this->rushTd40p;
    }

    public function setRushTd40p(?float $rushTd40p): SleeperStats
    {
        $this->rushTd40p = $rushTd40p;
        return $this;
    }

    public function getRushTd50p(): ?float
    {
        return $this->rushTd50p;
    }

    public function setRushTd50p(?float $rushTd50p): SleeperStats
    {
        $this->rushTd50p = $rushTd50p;
        return $this;
    }

    public function getRec(): ?float
    {
        return $this->rec;
    }

    public function setRec(?float $rec): SleeperStats
    {
        $this->rec = $rec;
        return $this;
    }

    public function getRecYd(): ?float
    {
        return $this->recYd;
    }

    public function setRecYd(?float $recYd): SleeperStats
    {
        $this->recYd = $recYd;
        return $this;
    }

    public function getRecTd(): ?float
    {
        return $this->recTd;
    }

    public function setRecTd(?float $recTd): SleeperStats
    {
        $this->recTd = $recTd;
        return $this;
    }

    public function getRecFd(): ?float
    {
        return $this->recFd;
    }

    public function setRecFd(?float $recFd): SleeperStats
    {
        $this->recFd = $recFd;
        return $this;
    }

    public function getRec2pt(): ?float
    {
        return $this->rec2pt;
    }

    public function setRec2pt(?float $rec2pt): SleeperStats
    {
        $this->rec2pt = $rec2pt;
        return $this;
    }

    public function getRec04(): ?float
    {
        return $this->rec04;
    }

    public function setRec04(?float $rec04): SleeperStats
    {
        $this->rec04 = $rec04;
        return $this;
    }

    public function getRec59(): ?float
    {
        return $this->rec59;
    }

    public function setRec59(?float $rec59): SleeperStats
    {
        $this->rec59 = $rec59;
        return $this;
    }

    public function getRec1019(): ?float
    {
        return $this->rec1019;
    }

    public function setRec1019(?float $rec1019): SleeperStats
    {
        $this->rec1019 = $rec1019;
        return $this;
    }

    public function getRec2029(): ?float
    {
        return $this->rec2029;
    }

    public function setRec2029(?float $rec2029): SleeperStats
    {
        $this->rec2029 = $rec2029;
        return $this;
    }

    public function getRec3039(): ?float
    {
        return $this->rec3039;
    }

    public function setRec3039(?float $rec3039): SleeperStats
    {
        $this->rec3039 = $rec3039;
        return $this;
    }

    public function getRec40p(): ?float
    {
        return $this->rec40p;
    }

    public function setRec40p(?float $rec40p): SleeperStats
    {
        $this->rec40p = $rec40p;
        return $this;
    }

    public function getRecTd40p(): ?float
    {
        return $this->recTd40p;
    }

    public function setRecTd40p(?float $recTd40p): SleeperStats
    {
        $this->recTd40p = $recTd40p;
        return $this;
    }

    public function getRecTd50p(): ?float
    {
        return $this->recTd50p;
    }

    public function setRecTd50p(?float $recTd50p): SleeperStats
    {
        $this->recTd50p = $recTd50p;
        return $this;
    }

    public function getBonusRecRb(): ?float
    {
        return $this->bonusRecRb;
    }

    public function setBonusRecRb(?float $bonusRecRb): SleeperStats
    {
        $this->bonusRecRb = $bonusRecRb;
        return $this;
    }

    public function getBonusRecWr(): ?float
    {
        return $this->bonusRecWr;
    }

    public function setBonusRecWr(?float $bonusRecWr): SleeperStats
    {
        $this->bonusRecWr = $bonusRecWr;
        return $this;
    }

    public function getBonusRecTe(): ?float
    {
        return $this->bonusRecTe;
    }

    public function setBonusRecTe(?float $bonusRecTe): SleeperStats
    {
        $this->bonusRecTe = $bonusRecTe;
        return $this;
    }

    public function getRecTdLng(): ?float
    {
        return $this->recTdLng;
    }

    public function setRecTdLng(?float $recTdLng): SleeperStats
    {
        $this->recTdLng = $recTdLng;
        return $this;
    }

    public function getRecRzTgt(): ?float
    {
        return $this->recRzTgt;
    }

    public function setRecRzTgt(?float $recRzTgt): SleeperStats
    {
        $this->recRzTgt = $recRzTgt;
        return $this;
    }

    public function getRecYpt(): ?float
    {
        return $this->recYpt;
    }

    public function setRecYpt(?float $recYpt): SleeperStats
    {
        $this->recYpt = $recYpt;
        return $this;
    }

    public function getRecAirYd(): ?float
    {
        return $this->recAirYd;
    }

    public function setRecAirYd(?float $recAirYd): SleeperStats
    {
        $this->recAirYd = $recAirYd;
        return $this;
    }

    public function getRecYpr(): ?float
    {
        return $this->recYpr;
    }

    public function setRecYpr(?float $recYpr): SleeperStats
    {
        $this->recYpr = $recYpr;
        return $this;
    }

    public function getRecDrop(): ?float
    {
        return $this->recDrop;
    }

    public function setRecDrop(?float $recDrop): SleeperStats
    {
        $this->recDrop = $recDrop;
        return $this;
    }

    public function getRecLng(): ?float
    {
        return $this->recLng;
    }

    public function setRecLng(?float $recLng): SleeperStats
    {
        $this->recLng = $recLng;
        return $this;
    }

    public function getRecTgt(): ?float
    {
        return $this->recTgt;
    }

    public function setRecTgt(?float $recTgt): SleeperStats
    {
        $this->recTgt = $recTgt;
        return $this;
    }

    public function getRecYar(): ?float
    {
        return $this->recYar;
    }

    public function setRecYar(?float $recYar): SleeperStats
    {
        $this->recYar = $recYar;
        return $this;
    }

    public function getFgm(): ?float
    {
        return $this->fgm;
    }

    public function setFgm(?float $fgm): SleeperStats
    {
        $this->fgm = $fgm;
        return $this;
    }

    public function getFgm019(): ?float
    {
        return $this->fgm019;
    }

    public function setFgm019(?float $fgm019): SleeperStats
    {
        $this->fgm019 = $fgm019;
        return $this;
    }

    public function getFgm2029(): ?float
    {
        return $this->fgm2029;
    }

    public function setFgm2029(?float $fgm2029): SleeperStats
    {
        $this->fgm2029 = $fgm2029;
        return $this;
    }

    public function getFgm3039(): ?float
    {
        return $this->fgm3039;
    }

    public function setFgm3039(?float $fgm3039): SleeperStats
    {
        $this->fgm3039 = $fgm3039;
        return $this;
    }

    public function getFgm4049(): ?float
    {
        return $this->fgm4049;
    }

    public function setFgm4049(?float $fgm4049): SleeperStats
    {
        $this->fgm4049 = $fgm4049;
        return $this;
    }

    public function getFgm50p(): ?float
    {
        return $this->fgm50p;
    }

    public function setFgm50p(?float $fgm50p): SleeperStats
    {
        $this->fgm50p = $fgm50p;
        return $this;
    }

    public function getFgmYds(): ?float
    {
        return $this->fgmYds;
    }

    public function setFgmYds(?float $fgmYds): SleeperStats
    {
        $this->fgmYds = $fgmYds;
        return $this;
    }

    public function getFgmYdsOver30(): ?float
    {
        return $this->fgmYdsOver30;
    }

    public function setFgmYdsOver30(?float $fgmYdsOver30): SleeperStats
    {
        $this->fgmYdsOver30 = $fgmYdsOver30;
        return $this;
    }

    public function getXpm(): ?float
    {
        return $this->xpm;
    }

    public function setXpm(?float $xpm): SleeperStats
    {
        $this->xpm = $xpm;
        return $this;
    }

    public function getFgmiss(): ?float
    {
        return $this->fgmiss;
    }

    public function setFgmiss(?float $fgmiss): SleeperStats
    {
        $this->fgmiss = $fgmiss;
        return $this;
    }

    public function getFgmiss019(): ?float
    {
        return $this->fgmiss019;
    }

    public function setFgmiss019(?float $fgmiss019): SleeperStats
    {
        $this->fgmiss019 = $fgmiss019;
        return $this;
    }

    public function getFgmiss2029(): ?float
    {
        return $this->fgmiss2029;
    }

    public function setFgmiss2029(?float $fgmiss2029): SleeperStats
    {
        $this->fgmiss2029 = $fgmiss2029;
        return $this;
    }

    public function getFgmiss3039(): ?float
    {
        return $this->fgmiss3039;
    }

    public function setFgmiss3039(?float $fgmiss3039): SleeperStats
    {
        $this->fgmiss3039 = $fgmiss3039;
        return $this;
    }

    public function getFgmiss4049(): ?float
    {
        return $this->fgmiss4049;
    }

    public function setFgmiss4049(?float $fgmiss4049): SleeperStats
    {
        $this->fgmiss4049 = $fgmiss4049;
        return $this;
    }

    public function getFgmiss50p(): ?float
    {
        return $this->fgmiss50p;
    }

    public function setFgmiss50p(?float $fgmiss50p): SleeperStats
    {
        $this->fgmiss50p = $fgmiss50p;
        return $this;
    }

    public function getXpmiss(): ?float
    {
        return $this->xpmiss;
    }

    public function setXpmiss(?float $xpmiss): SleeperStats
    {
        $this->xpmiss = $xpmiss;
        return $this;
    }

    public function getDefTd(): ?float
    {
        return $this->defTd;
    }

    public function setDefTd(?float $defTd): SleeperStats
    {
        $this->defTd = $defTd;
        return $this;
    }

    public function getPtsAllow0(): ?float
    {
        return $this->ptsAllow0;
    }

    public function setPtsAllow0(?float $ptsAllow0): SleeperStats
    {
        $this->ptsAllow0 = $ptsAllow0;
        return $this;
    }

    public function getPtsAllow16(): ?float
    {
        return $this->ptsAllow16;
    }

    public function setPtsAllow16(?float $ptsAllow16): SleeperStats
    {
        $this->ptsAllow16 = $ptsAllow16;
        return $this;
    }

    public function getPtsAllow713(): ?float
    {
        return $this->ptsAllow713;
    }

    public function setPtsAllow713(?float $ptsAllow713): SleeperStats
    {
        $this->ptsAllow713 = $ptsAllow713;
        return $this;
    }

    public function getPtsAllow1420(): ?float
    {
        return $this->ptsAllow1420;
    }

    public function setPtsAllow1420(?float $ptsAllow1420): SleeperStats
    {
        $this->ptsAllow1420 = $ptsAllow1420;
        return $this;
    }

    public function getPtsAllow2127(): ?float
    {
        return $this->ptsAllow2127;
    }

    public function setPtsAllow2127(?float $ptsAllow2127): SleeperStats
    {
        $this->ptsAllow2127 = $ptsAllow2127;
        return $this;
    }

    public function getPtsAllow2834(): ?float
    {
        return $this->ptsAllow2834;
    }

    public function setPtsAllow2834(?float $ptsAllow2834): SleeperStats
    {
        $this->ptsAllow2834 = $ptsAllow2834;
        return $this;
    }

    public function getPtsAllow35p(): ?float
    {
        return $this->ptsAllow35p;
    }

    public function setPtsAllow35p(?float $ptsAllow35p): SleeperStats
    {
        $this->ptsAllow35p = $ptsAllow35p;
        return $this;
    }

    public function getPtsAllow(): ?float
    {
        return $this->ptsAllow;
    }

    public function setPtsAllow(?float $ptsAllow): SleeperStats
    {
        $this->ptsAllow = $ptsAllow;
        return $this;
    }

    public function getYdsAllow0100(): ?float
    {
        return $this->ydsAllow0100;
    }

    public function setYdsAllow0100(?float $ydsAllow0100): SleeperStats
    {
        $this->ydsAllow0100 = $ydsAllow0100;
        return $this;
    }

    public function getYdsAllow100199(): ?float
    {
        return $this->ydsAllow100199;
    }

    public function setYdsAllow100199(?float $ydsAllow100199): SleeperStats
    {
        $this->ydsAllow100199 = $ydsAllow100199;
        return $this;
    }

    public function getYdsAllow200299(): ?float
    {
        return $this->ydsAllow200299;
    }

    public function setYdsAllow200299(?float $ydsAllow200299): SleeperStats
    {
        $this->ydsAllow200299 = $ydsAllow200299;
        return $this;
    }

    public function getYdsAllow300349(): ?float
    {
        return $this->ydsAllow300349;
    }

    public function setYdsAllow300349(?float $ydsAllow300349): SleeperStats
    {
        $this->ydsAllow300349 = $ydsAllow300349;
        return $this;
    }

    public function getYdsAllow350399(): ?float
    {
        return $this->ydsAllow350399;
    }

    public function setYdsAllow350399(?float $ydsAllow350399): SleeperStats
    {
        $this->ydsAllow350399 = $ydsAllow350399;
        return $this;
    }

    public function getYdsAllow400449(): ?float
    {
        return $this->ydsAllow400449;
    }

    public function setYdsAllow400449(?float $ydsAllow400449): SleeperStats
    {
        $this->ydsAllow400449 = $ydsAllow400449;
        return $this;
    }

    public function getYdsAllow450499(): ?float
    {
        return $this->ydsAllow450499;
    }

    public function setYdsAllow450499(?float $ydsAllow450499): SleeperStats
    {
        $this->ydsAllow450499 = $ydsAllow450499;
        return $this;
    }

    public function getYdsAllow500549(): ?float
    {
        return $this->ydsAllow500549;
    }

    public function setYdsAllow500549(?float $ydsAllow500549): SleeperStats
    {
        $this->ydsAllow500549 = $ydsAllow500549;
        return $this;
    }

    public function getYdsAllow550p(): ?float
    {
        return $this->ydsAllow550p;
    }

    public function setYdsAllow550p(?float $ydsAllow550p): SleeperStats
    {
        $this->ydsAllow550p = $ydsAllow550p;
        return $this;
    }

    public function getYdsAllow(): ?float
    {
        return $this->ydsAllow;
    }

    public function setYdsAllow(?float $ydsAllow): SleeperStats
    {
        $this->ydsAllow = $ydsAllow;
        return $this;
    }

    public function getDef3AndOut(): ?float
    {
        return $this->def3AndOut;
    }

    public function setDef3AndOut(?float $def3AndOut): SleeperStats
    {
        $this->def3AndOut = $def3AndOut;
        return $this;
    }

    public function getDef4AndStop(): ?float
    {
        return $this->def4AndStop;
    }

    public function setDef4AndStop(?float $def4AndStop): SleeperStats
    {
        $this->def4AndStop = $def4AndStop;
        return $this;
    }

    public function getQbHit(): ?float
    {
        return $this->qbHit;
    }

    public function setQbHit(?float $qbHit): SleeperStats
    {
        $this->qbHit = $qbHit;
        return $this;
    }

    public function getSack(): ?float
    {
        return $this->sack;
    }

    public function setSack(?float $sack): SleeperStats
    {
        $this->sack = $sack;
        return $this;
    }

    public function getSackYd(): ?float
    {
        return $this->sackYd;
    }

    public function setSackYd(?float $sackYd): SleeperStats
    {
        $this->sackYd = $sackYd;
        return $this;
    }

    public function getInt(): ?float
    {
        return $this->int;
    }

    public function setInt(?float $int): SleeperStats
    {
        $this->int = $int;
        return $this;
    }

    public function getIntRetYd(): ?float
    {
        return $this->intRetYd;
    }

    public function setIntRetYd(?float $intRetYd): SleeperStats
    {
        $this->intRetYd = $intRetYd;
        return $this;
    }

    public function getFumRec(): ?float
    {
        return $this->fumRec;
    }

    public function setFumRec(?float $fumRec): SleeperStats
    {
        $this->fumRec = $fumRec;
        return $this;
    }

    public function getFumRetYd(): ?float
    {
        return $this->fumRetYd;
    }

    public function setFumRetYd(?float $fumRetYd): SleeperStats
    {
        $this->fumRetYd = $fumRetYd;
        return $this;
    }

    public function getTklLoss(): ?float
    {
        return $this->tklLoss;
    }

    public function setTklLoss(?float $tklLoss): SleeperStats
    {
        $this->tklLoss = $tklLoss;
        return $this;
    }

    public function getTklAst(): ?float
    {
        return $this->tklAst;
    }

    public function setTklAst(?float $tklAst): SleeperStats
    {
        $this->tklAst = $tklAst;
        return $this;
    }

    public function getTklSolo(): ?float
    {
        return $this->tklSolo;
    }

    public function setTklSolo(?float $tklSolo): SleeperStats
    {
        $this->tklSolo = $tklSolo;
        return $this;
    }

    public function getTkl(): ?float
    {
        return $this->tkl;
    }

    public function setTkl(?float $tkl): SleeperStats
    {
        $this->tkl = $tkl;
        return $this;
    }

    public function getSafe(): ?float
    {
        return $this->safe;
    }

    public function setSafe(?float $safe): SleeperStats
    {
        $this->safe = $safe;
        return $this;
    }

    public function getFf(): ?float
    {
        return $this->ff;
    }

    public function setFf(?float $ff): SleeperStats
    {
        $this->ff = $ff;
        return $this;
    }

    public function getBlkKick(): ?float
    {
        return $this->blkKick;
    }

    public function setBlkKick(?float $blkKick): SleeperStats
    {
        $this->blkKick = $blkKick;
        return $this;
    }

    public function getDefForcedPunts(): ?float
    {
        return $this->defForcedPunts;
    }

    public function setDefForcedPunts(?float $defForcedPunts): SleeperStats
    {
        $this->defForcedPunts = $defForcedPunts;
        return $this;
    }

    public function getDefPassDef(): ?float
    {
        return $this->defPassDef;
    }

    public function setDefPassDef(?float $defPassDef): SleeperStats
    {
        $this->defPassDef = $defPassDef;
        return $this;
    }

    public function getDef2pt(): ?float
    {
        return $this->def2pt;
    }

    public function setDef2pt(?float $def2pt): SleeperStats
    {
        $this->def2pt = $def2pt;
        return $this;
    }

    public function getFgRetYd(): ?float
    {
        return $this->fgRetYd;
    }

    public function setFgRetYd(?float $fgRetYd): SleeperStats
    {
        $this->fgRetYd = $fgRetYd;
        return $this;
    }

    public function getBlkKickRetYd(): ?float
    {
        return $this->blkKickRetYd;
    }

    public function setBlkKickRetYd(?float $blkKickRetYd): SleeperStats
    {
        $this->blkKickRetYd = $blkKickRetYd;
        return $this;
    }

    public function getDefFumTd(): ?float
    {
        return $this->defFumTd;
    }

    public function setDefFumTd(?float $defFumTd): SleeperStats
    {
        $this->defFumTd = $defFumTd;
        return $this;
    }

    public function getDefStTd(): ?float
    {
        return $this->defStTd;
    }

    public function setDefStTd(?float $defStTd): SleeperStats
    {
        $this->defStTd = $defStTd;
        return $this;
    }

    public function getDefStFf(): ?float
    {
        return $this->defStFf;
    }

    public function setDefStFf(?float $defStFf): SleeperStats
    {
        $this->defStFf = $defStFf;
        return $this;
    }

    public function getDefStFumRec(): ?float
    {
        return $this->defStFumRec;
    }

    public function setDefStFumRec(?float $defStFumRec): SleeperStats
    {
        $this->defStFumRec = $defStFumRec;
        return $this;
    }

    public function getDefStTklSolo(): ?float
    {
        return $this->defStTklSolo;
    }

    public function setDefStTklSolo(?float $defStTklSolo): SleeperStats
    {
        $this->defStTklSolo = $defStTklSolo;
        return $this;
    }

    public function getDefPrYd(): ?float
    {
        return $this->defPrYd;
    }

    public function setDefPrYd(?float $defPrYd): SleeperStats
    {
        $this->defPrYd = $defPrYd;
        return $this;
    }

    public function getDefKrYd(): ?float
    {
        return $this->defKrYd;
    }

    public function setDefKrYd(?float $defKrYd): SleeperStats
    {
        $this->defKrYd = $defKrYd;
        return $this;
    }

    public function getStTd(): ?float
    {
        return $this->stTd;
    }

    public function setStTd(?float $stTd): SleeperStats
    {
        $this->stTd = $stTd;
        return $this;
    }

    public function getStFf(): ?float
    {
        return $this->stFf;
    }

    public function setStFf(?float $stFf): SleeperStats
    {
        $this->stFf = $stFf;
        return $this;
    }

    public function getStFumRec(): ?float
    {
        return $this->stFumRec;
    }

    public function setStFumRec(?float $stFumRec): SleeperStats
    {
        $this->stFumRec = $stFumRec;
        return $this;
    }

    public function getStTklSolo(): ?float
    {
        return $this->stTklSolo;
    }

    public function setStTklSolo(?float $stTklSolo): SleeperStats
    {
        $this->stTklSolo = $stTklSolo;
        return $this;
    }

    public function getPrYd(): ?float
    {
        return $this->prYd;
    }

    public function setPrYd(?float $prYd): SleeperStats
    {
        $this->prYd = $prYd;
        return $this;
    }

    public function getKrYd(): ?float
    {
        return $this->krYd;
    }

    public function setKrYd(?float $krYd): SleeperStats
    {
        $this->krYd = $krYd;
        return $this;
    }

    public function getPr(): ?float
    {
        return $this->pr;
    }

    public function setPr(?float $pr): SleeperStats
    {
        $this->pr = $pr;
        return $this;
    }

    public function getFum(): ?float
    {
        return $this->fum;
    }

    public function setFum(?float $fum): SleeperStats
    {
        $this->fum = $fum;
        return $this;
    }

    public function getFumLost(): ?float
    {
        return $this->fumLost;
    }

    public function setFumLost(?float $fumLost): SleeperStats
    {
        $this->fumLost = $fumLost;
        return $this;
    }

    public function getFumRecTd(): ?float
    {
        return $this->fumRecTd;
    }

    public function setFumRecTd(?float $fumRecTd): SleeperStats
    {
        $this->fumRecTd = $fumRecTd;
        return $this;
    }

    public function getBonusRushYd100(): ?float
    {
        return $this->bonusRushYd100;
    }

    public function setBonusRushYd100(?float $bonusRushYd100): SleeperStats
    {
        $this->bonusRushYd100 = $bonusRushYd100;
        return $this;
    }

    public function getBonusRushYd200(): ?float
    {
        return $this->bonusRushYd200;
    }

    public function setBonusRushYd200(?float $bonusRushYd200): SleeperStats
    {
        $this->bonusRushYd200 = $bonusRushYd200;
        return $this;
    }

    public function getBonusRecYd100(): ?float
    {
        return $this->bonusRecYd100;
    }

    public function setBonusRecYd100(?float $bonusRecYd100): SleeperStats
    {
        $this->bonusRecYd100 = $bonusRecYd100;
        return $this;
    }

    public function getBonusRecYd200(): ?float
    {
        return $this->bonusRecYd200;
    }

    public function setBonusRecYd200(?float $bonusRecYd200): SleeperStats
    {
        $this->bonusRecYd200 = $bonusRecYd200;
        return $this;
    }

    public function getBonusPassYd300(): ?float
    {
        return $this->bonusPassYd300;
    }

    public function setBonusPassYd300(?float $bonusPassYd300): SleeperStats
    {
        $this->bonusPassYd300 = $bonusPassYd300;
        return $this;
    }

    public function getBonusPassYd400(): ?float
    {
        return $this->bonusPassYd400;
    }

    public function setBonusPassYd400(?float $bonusPassYd400): SleeperStats
    {
        $this->bonusPassYd400 = $bonusPassYd400;
        return $this;
    }

    public function getBonusRushRecYd100(): ?float
    {
        return $this->bonusRushRecYd100;
    }

    public function setBonusRushRecYd100(?float $bonusRushRecYd100): SleeperStats
    {
        $this->bonusRushRecYd100 = $bonusRushRecYd100;
        return $this;
    }

    public function getBonusRushRecYd200(): ?float
    {
        return $this->bonusRushRecYd200;
    }

    public function setBonusRushRecYd200(?float $bonusRushRecYd200): SleeperStats
    {
        $this->bonusRushRecYd200 = $bonusRushRecYd200;
        return $this;
    }

    public function getBonusPassCmp25(): ?float
    {
        return $this->bonusPassCmp25;
    }

    public function setBonusPassCmp25(?float $bonusPassCmp25): SleeperStats
    {
        $this->bonusPassCmp25 = $bonusPassCmp25;
        return $this;
    }

    public function getBonusRushAtt20(): ?float
    {
        return $this->bonusRushAtt20;
    }

    public function setBonusRushAtt20(?float $bonusRushAtt20): SleeperStats
    {
        $this->bonusRushAtt20 = $bonusRushAtt20;
        return $this;
    }

    public function getBonusFdRb(): ?float
    {
        return $this->bonusFdRb;
    }

    public function setBonusFdRb(?float $bonusFdRb): SleeperStats
    {
        $this->bonusFdRb = $bonusFdRb;
        return $this;
    }

    public function getBonusFdWr(): ?float
    {
        return $this->bonusFdWr;
    }

    public function setBonusFdWr(?float $bonusFdWr): SleeperStats
    {
        $this->bonusFdWr = $bonusFdWr;
        return $this;
    }

    public function getBonusFdTe(): ?float
    {
        return $this->bonusFdTe;
    }

    public function setBonusFdTe(?float $bonusFdTe): SleeperStats
    {
        $this->bonusFdTe = $bonusFdTe;
        return $this;
    }

    public function getBonusFdQb(): ?float
    {
        return $this->bonusFdQb;
    }

    public function setBonusFdQb(?float $bonusFdQb): SleeperStats
    {
        $this->bonusFdQb = $bonusFdQb;
        return $this;
    }

    public function getIdpDefTd(): ?float
    {
        return $this->idpDefTd;
    }

    public function setIdpDefTd(?float $idpDefTd): SleeperStats
    {
        $this->idpDefTd = $idpDefTd;
        return $this;
    }

    public function getIdpSack(): ?float
    {
        return $this->idpSack;
    }

    public function setIdpSack(?float $idpSack): SleeperStats
    {
        $this->idpSack = $idpSack;
        return $this;
    }

    public function getIdpSackYd(): ?float
    {
        return $this->idpSackYd;
    }

    public function setIdpSackYd(?float $idpSackYd): SleeperStats
    {
        $this->idpSackYd = $idpSackYd;
        return $this;
    }

    public function getIdpQbHit(): ?float
    {
        return $this->idpQbHit;
    }

    public function setIdpQbHit(?float $idpQbHit): SleeperStats
    {
        $this->idpQbHit = $idpQbHit;
        return $this;
    }

    public function getIdpTkl(): ?float
    {
        return $this->idpTkl;
    }

    public function setIdpTkl(?float $idpTkl): SleeperStats
    {
        $this->idpTkl = $idpTkl;
        return $this;
    }

    public function getIdpTklLoss(): ?float
    {
        return $this->idpTklLoss;
    }

    public function setIdpTklLoss(?float $idpTklLoss): SleeperStats
    {
        $this->idpTklLoss = $idpTklLoss;
        return $this;
    }

    public function getIdpBlkKick(): ?float
    {
        return $this->idpBlkKick;
    }

    public function setIdpBlkKick(?float $idpBlkKick): SleeperStats
    {
        $this->idpBlkKick = $idpBlkKick;
        return $this;
    }

    public function getIdpInt(): ?float
    {
        return $this->idpInt;
    }

    public function setIdpInt(?float $idpInt): SleeperStats
    {
        $this->idpInt = $idpInt;
        return $this;
    }

    public function getIdpIntRetYd(): ?float
    {
        return $this->idpIntRetYd;
    }

    public function setIdpIntRetYd(?float $idpIntRetYd): SleeperStats
    {
        $this->idpIntRetYd = $idpIntRetYd;
        return $this;
    }

    public function getIdpFumRec(): ?float
    {
        return $this->idpFumRec;
    }

    public function setIdpFumRec(?float $idpFumRec): SleeperStats
    {
        $this->idpFumRec = $idpFumRec;
        return $this;
    }

    public function getIdpFumRetYd(): ?float
    {
        return $this->idpFumRetYd;
    }

    public function setIdpFumRetYd(?float $idpFumRetYd): SleeperStats
    {
        $this->idpFumRetYd = $idpFumRetYd;
        return $this;
    }

    public function getIdpFf(): ?float
    {
        return $this->idpFf;
    }

    public function setIdpFf(?float $idpFf): SleeperStats
    {
        $this->idpFf = $idpFf;
        return $this;
    }

    public function getIdpSafe(): ?float
    {
        return $this->idpSafe;
    }

    public function setIdpSafe(?float $idpSafe): SleeperStats
    {
        $this->idpSafe = $idpSafe;
        return $this;
    }

    public function getIdpTklAst(): ?float
    {
        return $this->idpTklAst;
    }

    public function setIdpTklAst(?float $idpTklAst): SleeperStats
    {
        $this->idpTklAst = $idpTklAst;
        return $this;
    }

    public function getIdpTklSolo(): ?float
    {
        return $this->idpTklSolo;
    }

    public function setIdpTklSolo(?float $idpTklSolo): SleeperStats
    {
        $this->idpTklSolo = $idpTklSolo;
        return $this;
    }

    public function getIdpPassDef(): ?float
    {
        return $this->idpPassDef;
    }

    public function setIdpPassDef(?float $idpPassDef): SleeperStats
    {
        $this->idpPassDef = $idpPassDef;
        return $this;
    }

    public function getBonusTkl10p(): ?float
    {
        return $this->bonusTkl10p;
    }

    public function setBonusTkl10p(?float $bonusTkl10p): SleeperStats
    {
        $this->bonusTkl10p = $bonusTkl10p;
        return $this;
    }

    public function getBonusSack2p(): ?float
    {
        return $this->bonusSack2p;
    }

    public function setBonusSack2p(?float $bonusSack2p): SleeperStats
    {
        $this->bonusSack2p = $bonusSack2p;
        return $this;
    }

    public function getIdpPassDef3p(): ?float
    {
        return $this->idpPassDef3p;
    }

    public function setIdpPassDef3p(?float $idpPassDef3p): SleeperStats
    {
        $this->idpPassDef3p = $idpPassDef3p;
        return $this;
    }

    public function getBonusDefIntTd50p(): ?float
    {
        return $this->bonusDefIntTd50p;
    }

    public function setBonusDefIntTd50p(?float $bonusDefIntTd50p): SleeperStats
    {
        $this->bonusDefIntTd50p = $bonusDefIntTd50p;
        return $this;
    }

    public function getBonusDefFumTd50p(): ?float
    {
        return $this->bonusDefFumTd50p;
    }

    public function setBonusDefFumTd50p(?float $bonusDefFumTd50p): SleeperStats
    {
        $this->bonusDefFumTd50p = $bonusDefFumTd50p;
        return $this;
    }
}
