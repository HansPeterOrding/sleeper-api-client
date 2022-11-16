<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperStats
{
    private ?float $gp = null;
    private ?float $gmsActive = null;

    private ?float $rushYd = null;
    private ?float $rushTd = null;
    private ?float $rushFd = null;
    private ?float $rushAtt = null;
    private ?float $rush40p = null;

    private ?float $rush2pt = null;
    private ?float $bonusRushRecYd100 = null;
    private ?float $recYd = null;
    private ?float $recTdLng = null;
    private ?float $rec3039 = null;
    private ?float $recRzTgt = null;
    private ?float $recYpt = null;
    private ?float $recAirYd = null;
    private ?float $recYpr = null;
    private ?float $rec2029 = null;
    private ?float $rec04 = null;
    private ?float $rec = null;
    private ?float $rec59 = null;
    private ?float $recDrop = null;
    private ?float $recTd = null;
    private ?float $recLng = null;
    private ?float $rec1019 = null;
    private ?float $recTgt = null;
    private ?float $recYar = null;
    private ?float $rec40p = null;
    private ?float $bonusRecWr = null;
    private ?float $bonusRecYd100 = null;
    private ?float $recFd = null;
    private ?float $bonusRecRb = null;
    private ?float $recTd40p = null;
    private ?float $rec2pt = null;
    private ?float $bonusRecTe = null;

    private ?float $fumRec = null;
    private ?float $passYd = null;
    private ?float $passTd40p = null;
    private ?float $passTd = null;
    private ?float $passSack = null;
    private ?float $passIntTd = null;
    private ?float $passInt = null;
    private ?float $passInc = null;
    private ?float $passFd = null;
    private ?float $passCmp40p = null;
    private ?float $passCmp = null;
    private ?float $passAtt = null;
    private ?float $pass2Pt = null;

    private ?float $fum = null;
    private ?float $fumLost = null;
    private ?float $sack = null;
    private ?float $ff = null;
    private ?float $cmpPct = null;
    private ?float $int = null;

    private ?float $ptsStd = null;
    private ?float $ptsHalfPpr = null;
    private ?float $ptsPpr = null;
    private ?float $ptsAllow2127 = null;
    private ?float $ptsAllow = null;

    private ?float $rankStd = null;
    private ?float $rankPpr = null;
    private ?float $posRankStd = null;
    private ?float $posRankPpr = null;

    private ?float $offSnp = null;
    private ?float $tmOffSnp = null;
    private ?float $tmDefSnp = null;
    private ?float $tmStSnp = null;

    private ?float $defTd = null;
    private ?float $defPrYd = null;
    private ?float $defKrYd = null;
    private ?float $defFumTd = null;

    private ?float $ydsAllow350399 = null;
    private ?float $ydsAllow = null;

    private ?float $gs = null;
    private ?float $penalty = null;
    private ?float $penaltyYd = null;

    private ?float $posAdpDdPpr = null;
    private ?float $adpDdPpr = null;
    private ?float $pr = null;
    private ?float $prYd = null;
    private ?float $tklLoss = null;
    private ?float $blkKick = null;

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

    public function getRush2pt(): ?float
    {
        return $this->rush2pt;
    }

    public function setRush2pt(?float $rush2pt): SleeperStats
    {
        $this->rush2pt = $rush2pt;
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

    public function getRecYd(): ?float
    {
        return $this->recYd;
    }

    public function setRecYd(?float $recYd): SleeperStats
    {
        $this->recYd = $recYd;
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

    public function getRec3039(): ?float
    {
        return $this->rec3039;
    }

    public function setRec3039(?float $rec3039): SleeperStats
    {
        $this->rec3039 = $rec3039;
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

    public function getRec2029(): ?float
    {
        return $this->rec2029;
    }

    public function setRec2029(?float $rec2029): SleeperStats
    {
        $this->rec2029 = $rec2029;
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

    public function getRec(): ?float
    {
        return $this->rec;
    }

    public function setRec(?float $rec): SleeperStats
    {
        $this->rec = $rec;
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

    public function getRecDrop(): ?float
    {
        return $this->recDrop;
    }

    public function setRecDrop(?float $recDrop): SleeperStats
    {
        $this->recDrop = $recDrop;
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

    public function getRecLng(): ?float
    {
        return $this->recLng;
    }

    public function setRecLng(?float $recLng): SleeperStats
    {
        $this->recLng = $recLng;
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

    public function getRec40p(): ?float
    {
        return $this->rec40p;
    }

    public function setRec40p(?float $rec40p): SleeperStats
    {
        $this->rec40p = $rec40p;
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

    public function getBonusRecYd100(): ?float
    {
        return $this->bonusRecYd100;
    }

    public function setBonusRecYd100(?float $bonusRecYd100): SleeperStats
    {
        $this->bonusRecYd100 = $bonusRecYd100;
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

    public function getBonusRecRb(): ?float
    {
        return $this->bonusRecRb;
    }

    public function setBonusRecRb(?float $bonusRecRb): SleeperStats
    {
        $this->bonusRecRb = $bonusRecRb;
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

    public function getRec2pt(): ?float
    {
        return $this->rec2pt;
    }

    public function setRec2pt(?float $rec2pt): SleeperStats
    {
        $this->rec2pt = $rec2pt;
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

    public function getFumRec(): ?float
    {
        return $this->fumRec;
    }

    public function setFumRec(?float $fumRec): SleeperStats
    {
        $this->fumRec = $fumRec;
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

    public function getPassTd40p(): ?float
    {
        return $this->passTd40p;
    }

    public function setPassTd40p(?float $passTd40p): SleeperStats
    {
        $this->passTd40p = $passTd40p;
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

    public function getPassSack(): ?float
    {
        return $this->passSack;
    }

    public function setPassSack(?float $passSack): SleeperStats
    {
        $this->passSack = $passSack;
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

    public function getPassInt(): ?float
    {
        return $this->passInt;
    }

    public function setPassInt(?float $passInt): SleeperStats
    {
        $this->passInt = $passInt;
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

    public function getPassFd(): ?float
    {
        return $this->passFd;
    }

    public function setPassFd(?float $passFd): SleeperStats
    {
        $this->passFd = $passFd;
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

    public function getPassCmp(): ?float
    {
        return $this->passCmp;
    }

    public function setPassCmp(?float $passCmp): SleeperStats
    {
        $this->passCmp = $passCmp;
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

    public function getPass2Pt(): ?float
    {
        return $this->pass2Pt;
    }

    public function setPass2Pt(?float $pass2Pt): SleeperStats
    {
        $this->pass2Pt = $pass2Pt;
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

    public function getSack(): ?float
    {
        return $this->sack;
    }

    public function setSack(?float $sack): SleeperStats
    {
        $this->sack = $sack;
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

    public function getCmpPct(): ?float
    {
        return $this->cmpPct;
    }

    public function setCmpPct(?float $cmpPct): SleeperStats
    {
        $this->cmpPct = $cmpPct;
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

    public function getPtsAllow2127(): ?float
    {
        return $this->ptsAllow2127;
    }

    public function setPtsAllow2127(?float $ptsAllow2127): SleeperStats
    {
        $this->ptsAllow2127 = $ptsAllow2127;
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

    public function getDefTd(): ?float
    {
        return $this->defTd;
    }

    public function setDefTd(?float $defTd): SleeperStats
    {
        $this->defTd = $defTd;
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

    public function getDefFumTd(): ?float
    {
        return $this->defFumTd;
    }

    public function setDefFumTd(?float $defFumTd): SleeperStats
    {
        $this->defFumTd = $defFumTd;
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

    public function getYdsAllow(): ?float
    {
        return $this->ydsAllow;
    }

    public function setYdsAllow(?float $ydsAllow): SleeperStats
    {
        $this->ydsAllow = $ydsAllow;
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

    public function getPr(): ?float
    {
        return $this->pr;
    }

    public function setPr(?float $pr): SleeperStats
    {
        $this->pr = $pr;
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

    public function getTklLoss(): ?float
    {
        return $this->tklLoss;
    }

    public function setTklLoss(?float $tklLoss): SleeperStats
    {
        $this->tklLoss = $tklLoss;
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
}
