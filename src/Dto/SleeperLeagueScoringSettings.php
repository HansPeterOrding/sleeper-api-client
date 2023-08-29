<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperLeagueScoringSettings
{
    // Passing
<<<<<<< Updated upstream
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

    // Rushing
    private ?float $rushYd = null;
    private ?float $rushTd = null;
    private ?float $rushFd = null;
    private ?float $rush2pt = null;
    private ?float $rushAtt = null;
    private ?float $rush40p = null;
=======
    private ?float $passYd     = null;
    private ?float $passTd     = null;
    private ?float $passFd     = null;
    private ?float $pass2pt    = null;
    private ?float $passInt    = null;
    private ?float $passIntTd  = null;
    private ?float $passCmp    = null;
    private ?float $passInc    = null;
    private ?float $passAtt    = null;
    private ?float $passSack   = null;
    private ?float $passCmp40p = null;
    private ?float $passTd40p  = null;
    private ?float $passTd50p  = null;

    // Rushing
    private ?float $rushYd    = null;
    private ?float $rushTd    = null;
    private ?float $rushFd    = null;
    private ?float $rush2pt   = null;
    private ?float $rushAtt   = null;
    private ?float $rush40p   = null;
>>>>>>> Stashed changes
    private ?float $rushTd40p = null;
    private ?float $rushTd50p = null;

    // Receiving
<<<<<<< Updated upstream
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
=======
    private ?float $rec        = null;
    private ?float $recYd      = null;
    private ?float $recTd      = null;
    private ?float $recFd      = null;
    private ?float $rec2pt     = null;
    private ?float $rec04      = null;
    private ?float $rec59      = null;
    private ?float $rec1019    = null;
    private ?float $rec2029    = null;
    private ?float $rec3039    = null;
    private ?float $rec40p     = null;
    private ?float $recTd40p   = null;
    private ?float $recTd50p   = null;
>>>>>>> Stashed changes
    private ?float $bonusRecRb = null;
    private ?float $bonusRecWr = null;
    private ?float $bonusRecTe = null;

    // Kicking
<<<<<<< Updated upstream
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
=======
    private ?float $fgm          = null;
    private ?float $fgm019       = null;
    private ?float $fgm2029      = null;
    private ?float $fgm3039      = null;
    private ?float $fgm4049      = null;
    private ?float $fgm50p       = null;
    private ?float $fgmYds       = null;
    private ?float $fgmYdsOver30 = null;
    private ?float $xpm          = null;
    private ?float $fgmiss       = null;
    private ?float $fgmiss019    = null;
    private ?float $fgmiss2029   = null;
    private ?float $fgmiss3039   = null;
    private ?float $fgmiss4049   = null;
    private ?float $fgmiss50p    = null;
    private ?float $xpmiss       = null;

    // Team defense
    private ?float $defTd          = null;
    private ?float $ptsAllow0      = null;
    private ?float $ptsAllow16     = null;
    private ?float $ptsAllow713    = null;
    private ?float $ptsAllow1420   = null;
    private ?float $ptsAllow2127   = null;
    private ?float $ptsAllow2834   = null;
    private ?float $ptsAllow35p    = null;
    private ?float $ptsAllow       = null;
    private ?float $ydsAllow0100   = null;
>>>>>>> Stashed changes
    private ?float $ydsAllow100199 = null;
    private ?float $ydsAllow200299 = null;
    private ?float $ydsAllow300349 = null;
    private ?float $ydsAllow350399 = null;
    private ?float $ydsAllow400449 = null;
    private ?float $ydsAllow450499 = null;
    private ?float $ydsAllow500549 = null;
<<<<<<< Updated upstream
    private ?float $ydsAllow550p = null;
    private ?float $ydsAllow = null;
    private ?float $def3andOut = null;
    private ?float $def4andStop = null;
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
=======
    private ?float $ydsAllow550p   = null;
    private ?float $ydsAllow       = null;
    private ?float $def3andOut     = null;
    private ?float $def4andStop    = null;
    private ?float $qbHit          = null;
    private ?float $sack           = null;
    private ?float $sackYd         = null;
    private ?float $int            = null;
    private ?float $intRetYd       = null;
    private ?float $fumRec         = null;
    private ?float $fumRetYd       = null;
    private ?float $tklLoss        = null;
    private ?float $tklAst         = null;
    private ?float $tklSolo        = null;
    private ?float $tkl            = null;
    private ?float $safe           = null;
    private ?float $ff             = null;
    private ?float $blkKick        = null;
    private ?float $defForcedPunts = null;
    private ?float $defPassDef     = null;
    private ?float $def2pt         = null;
    private ?float $fgRetYd        = null;
    private ?float $blkKickRetYd   = null;

    // Special Teams Defense
    private ?float $defStTd      = null;
    private ?float $defStFf      = null;
    private ?float $defStFumRec  = null;
    private ?float $defStTklSolo = null;
    private ?float $defPrYd      = null;
    private ?float $defKrYd      = null;

    // Special Teams Player
    private ?float $stTd      = null;
    private ?float $stFf      = null;
    private ?float $stFumRec  = null;
    private ?float $stTklSolo = null;
    private ?float $prYd      = null;
    private ?float $krYd      = null;

    // Misc
    private ?float $fum      = null;
    private ?float $fumLost  = null;
    private ?float $fumRecTd = null;

    // Bonus
    private ?float $bonusRushYd100    = null;
    private ?float $bonusRushYd200    = null;
    private ?float $bonusRecYd100     = null;
    private ?float $bonusRecYd200     = null;
    private ?float $bonusPassYd300    = null;
    private ?float $bonusPassYd400    = null;
    private ?float $bonusRushRecYd100 = null;
    private ?float $bonusRushRecYd200 = null;
    private ?float $bonusPassCmp25    = null;
    private ?float $bonusRushAtt20    = null;
    private ?float $bonusFdRb         = null;
    private ?float $bonusFdWr         = null;
    private ?float $bonusFdTe         = null;
    private ?float $bonusFdQb         = null;

    // IDP
    private ?float $idpDefTd         = null;
    private ?float $idpSack          = null;
    private ?float $idpSackYd        = null;
    private ?float $idpQbHit         = null;
    private ?float $idpTkl           = null;
    private ?float $idpTklLoss       = null;
    private ?float $idpBlkKick       = null;
    private ?float $idpInt           = null;
    private ?float $idpIntRetYd      = null;
    private ?float $idpFumRec        = null;
    private ?float $idpFumRetYd      = null;
    private ?float $idpFf            = null;
    private ?float $idpSafe          = null;
    private ?float $idpTklAst        = null;
    private ?float $idpTklSolo       = null;
    private ?float $idpPassDef       = null;
    private ?float $bonusTkl10p      = null;
    private ?float $bonusSack2p      = null;
    private ?float $idpPassDef3p     = null;
>>>>>>> Stashed changes
    private ?float $bonusDefIntTd50p = null;
    private ?float $bonusDefFumTd50p = null;

    public function getPassYd(): ?float
    {
        return $this->passYd;
    }

    public function setPassYd(?float $passYd): SleeperLeagueScoringSettings
    {
        $this->passYd = $passYd;
        return $this;
    }

    public function getPassTd(): ?float
    {
        return $this->passTd;
    }

    public function setPassTd(?float $passTd): SleeperLeagueScoringSettings
    {
        $this->passTd = $passTd;
        return $this;
    }

    public function getPassFd(): ?float
    {
        return $this->passFd;
    }

    public function setPassFd(?float $passFd): SleeperLeagueScoringSettings
    {
        $this->passFd = $passFd;
        return $this;
    }

    public function getPass2pt(): ?float
    {
        return $this->pass2pt;
    }

    public function setPass2pt(?float $pass2pt): SleeperLeagueScoringSettings
    {
        $this->pass2pt = $pass2pt;
        return $this;
    }

    public function getPassInt(): ?float
    {
        return $this->passInt;
    }

    public function setPassInt(?float $passInt): SleeperLeagueScoringSettings
    {
        $this->passInt = $passInt;
        return $this;
    }

    public function getPassIntTd(): ?float
    {
        return $this->passIntTd;
    }

    public function setPassIntTd(?float $passIntTd): SleeperLeagueScoringSettings
    {
        $this->passIntTd = $passIntTd;
        return $this;
    }

    public function getPassCmp(): ?float
    {
        return $this->passCmp;
    }

    public function setPassCmp(?float $passCmp): SleeperLeagueScoringSettings
    {
        $this->passCmp = $passCmp;
        return $this;
    }

    public function getPassInc(): ?float
    {
        return $this->passInc;
    }

    public function setPassInc(?float $passInc): SleeperLeagueScoringSettings
    {
        $this->passInc = $passInc;
        return $this;
    }

    public function getPassAtt(): ?float
    {
        return $this->passAtt;
    }

    public function setPassAtt(?float $passAtt): SleeperLeagueScoringSettings
    {
        $this->passAtt = $passAtt;
        return $this;
    }

    public function getPassSack(): ?float
    {
        return $this->passSack;
    }

    public function setPassSack(?float $passSack): SleeperLeagueScoringSettings
    {
        $this->passSack = $passSack;
        return $this;
    }

    public function getPassCmp40p(): ?float
    {
        return $this->passCmp40p;
    }

    public function setPassCmp40p(?float $passCmp40p): SleeperLeagueScoringSettings
    {
        $this->passCmp40p = $passCmp40p;
        return $this;
    }

    public function getPassTd40p(): ?float
    {
        return $this->passTd40p;
    }

    public function setPassTd40p(?float $passTd40p): SleeperLeagueScoringSettings
    {
        $this->passTd40p = $passTd40p;
        return $this;
    }

    public function getPassTd50p(): ?float
    {
        return $this->passTd50p;
    }

    public function setPassTd50p(?float $passTd50p): SleeperLeagueScoringSettings
    {
        $this->passTd50p = $passTd50p;
        return $this;
    }

    public function getRushYd(): ?float
    {
        return $this->rushYd;
    }

    public function setRushYd(?float $rushYd): SleeperLeagueScoringSettings
    {
        $this->rushYd = $rushYd;
        return $this;
    }

    public function getRushTd(): ?float
    {
        return $this->rushTd;
    }

    public function setRushTd(?float $rushTd): SleeperLeagueScoringSettings
    {
        $this->rushTd = $rushTd;
        return $this;
    }

    public function getRushFd(): ?float
    {
        return $this->rushFd;
    }

    public function setRushFd(?float $rushFd): SleeperLeagueScoringSettings
    {
        $this->rushFd = $rushFd;
        return $this;
    }

    public function getRush2pt(): ?float
    {
        return $this->rush2pt;
    }

    public function setRush2pt(?float $rush2pt): SleeperLeagueScoringSettings
    {
        $this->rush2pt = $rush2pt;
        return $this;
    }

    public function getRushAtt(): ?float
    {
        return $this->rushAtt;
    }

    public function setRushAtt(?float $rushAtt): SleeperLeagueScoringSettings
    {
        $this->rushAtt = $rushAtt;
        return $this;
    }

    public function getRush40p(): ?float
    {
        return $this->rush40p;
    }

    public function setRush40p(?float $rush40p): SleeperLeagueScoringSettings
    {
        $this->rush40p = $rush40p;
        return $this;
    }

    public function getRushTd40p(): ?float
    {
        return $this->rushTd40p;
    }

    public function setRushTd40p(?float $rushTd40p): SleeperLeagueScoringSettings
    {
        $this->rushTd40p = $rushTd40p;
        return $this;
    }

    public function getRushTd50p(): ?float
    {
        return $this->rushTd50p;
    }

    public function setRushTd50p(?float $rushTd50p): SleeperLeagueScoringSettings
    {
        $this->rushTd50p = $rushTd50p;
        return $this;
    }

    public function getRec(): ?float
    {
        return $this->rec;
    }

    public function setRec(?float $rec): SleeperLeagueScoringSettings
    {
        $this->rec = $rec;
        return $this;
    }

    public function getRecYd(): ?float
    {
        return $this->recYd;
    }

    public function setRecYd(?float $recYd): SleeperLeagueScoringSettings
    {
        $this->recYd = $recYd;
        return $this;
    }

    public function getRecTd(): ?float
    {
        return $this->recTd;
    }

    public function setRecTd(?float $recTd): SleeperLeagueScoringSettings
    {
        $this->recTd = $recTd;
        return $this;
    }

    public function getRecFd(): ?float
    {
        return $this->recFd;
    }

    public function setRecFd(?float $recFd): SleeperLeagueScoringSettings
    {
        $this->recFd = $recFd;
        return $this;
    }

    public function getRec2pt(): ?float
    {
        return $this->rec2pt;
    }

    public function setRec2pt(?float $rec2pt): SleeperLeagueScoringSettings
    {
        $this->rec2pt = $rec2pt;
        return $this;
    }

    public function getRec04(): ?float
    {
        return $this->rec04;
    }

    public function setRec04(?float $rec04): SleeperLeagueScoringSettings
    {
        $this->rec04 = $rec04;
        return $this;
    }

    public function getRec59(): ?float
    {
        return $this->rec59;
    }

    public function setRec59(?float $rec59): SleeperLeagueScoringSettings
    {
        $this->rec59 = $rec59;
        return $this;
    }

    public function getRec1019(): ?float
    {
        return $this->rec1019;
    }

    public function setRec1019(?float $rec1019): SleeperLeagueScoringSettings
    {
        $this->rec1019 = $rec1019;
        return $this;
    }

    public function getRec2029(): ?float
    {
        return $this->rec2029;
    }

    public function setRec2029(?float $rec2029): SleeperLeagueScoringSettings
    {
        $this->rec2029 = $rec2029;
        return $this;
    }

    public function getRec3039(): ?float
    {
        return $this->rec3039;
    }

    public function setRec3039(?float $rec3039): SleeperLeagueScoringSettings
    {
        $this->rec3039 = $rec3039;
        return $this;
    }

    public function getRec40p(): ?float
    {
        return $this->rec40p;
    }

    public function setRec40p(?float $rec40p): SleeperLeagueScoringSettings
    {
        $this->rec40p = $rec40p;
        return $this;
    }

    public function getRecTd40p(): ?float
    {
        return $this->recTd40p;
    }

    public function setRecTd40p(?float $recTd40p): SleeperLeagueScoringSettings
    {
        $this->recTd40p = $recTd40p;
        return $this;
    }

    public function getRecTd50p(): ?float
    {
        return $this->recTd50p;
    }

    public function setRecTd50p(?float $recTd50p): SleeperLeagueScoringSettings
    {
        $this->recTd50p = $recTd50p;
        return $this;
    }

    public function getBonusRecRb(): ?float
    {
        return $this->bonusRecRb;
    }

    public function setBonusRecRb(?float $bonusRecRb): SleeperLeagueScoringSettings
    {
        $this->bonusRecRb = $bonusRecRb;
        return $this;
    }

    public function getBonusRecWr(): ?float
    {
        return $this->bonusRecWr;
    }

    public function setBonusRecWr(?float $bonusRecWr): SleeperLeagueScoringSettings
    {
        $this->bonusRecWr = $bonusRecWr;
        return $this;
    }

    public function getBonusRecTe(): ?float
    {
        return $this->bonusRecTe;
    }

    public function setBonusRecTe(?float $bonusRecTe): SleeperLeagueScoringSettings
    {
        $this->bonusRecTe = $bonusRecTe;
        return $this;
    }

    public function getFgm(): ?float
    {
        return $this->fgm;
    }

    public function setFgm(?float $fgm): SleeperLeagueScoringSettings
    {
        $this->fgm = $fgm;
        return $this;
    }

    public function getFgm019(): ?float
    {
        return $this->fgm019;
    }

    public function setFgm019(?float $fgm019): SleeperLeagueScoringSettings
    {
        $this->fgm019 = $fgm019;
        return $this;
    }

    public function getFgm2029(): ?float
    {
        return $this->fgm2029;
    }

    public function setFgm2029(?float $fgm2029): SleeperLeagueScoringSettings
    {
        $this->fgm2029 = $fgm2029;
        return $this;
    }

    public function getFgm3039(): ?float
    {
        return $this->fgm3039;
    }

    public function setFgm3039(?float $fgm3039): SleeperLeagueScoringSettings
    {
        $this->fgm3039 = $fgm3039;
        return $this;
    }

    public function getFgm4049(): ?float
    {
        return $this->fgm4049;
    }

    public function setFgm4049(?float $fgm4049): SleeperLeagueScoringSettings
    {
        $this->fgm4049 = $fgm4049;
        return $this;
    }

    public function getFgm50p(): ?float
    {
        return $this->fgm50p;
    }

    public function setFgm50p(?float $fgm50p): SleeperLeagueScoringSettings
    {
        $this->fgm50p = $fgm50p;
        return $this;
    }

    public function getFgmYds(): ?float
    {
        return $this->fgmYds;
    }

    public function setFgmYds(?float $fgmYds): SleeperLeagueScoringSettings
    {
        $this->fgmYds = $fgmYds;
        return $this;
    }

    public function getFgmYdsOver30(): ?float
    {
        return $this->fgmYdsOver30;
    }

    public function setFgmYdsOver30(?float $fgmYdsOver30): SleeperLeagueScoringSettings
    {
        $this->fgmYdsOver30 = $fgmYdsOver30;
        return $this;
    }

    public function getXpm(): ?float
    {
        return $this->xpm;
    }

    public function setXpm(?float $xpm): SleeperLeagueScoringSettings
    {
        $this->xpm = $xpm;
        return $this;
    }

    public function getFgmiss(): ?float
    {
        return $this->fgmiss;
    }

    public function setFgmiss(?float $fgmiss): SleeperLeagueScoringSettings
    {
        $this->fgmiss = $fgmiss;
        return $this;
    }

    public function getFgmiss019(): ?float
    {
        return $this->fgmiss019;
    }

    public function setFgmiss019(?float $fgmiss019): SleeperLeagueScoringSettings
    {
        $this->fgmiss019 = $fgmiss019;
        return $this;
    }

    public function getFgmiss2029(): ?float
    {
        return $this->fgmiss2029;
    }

    public function setFgmiss2029(?float $fgmiss2029): SleeperLeagueScoringSettings
    {
        $this->fgmiss2029 = $fgmiss2029;
        return $this;
    }

    public function getFgmiss3039(): ?float
    {
        return $this->fgmiss3039;
    }

    public function setFgmiss3039(?float $fgmiss3039): SleeperLeagueScoringSettings
    {
        $this->fgmiss3039 = $fgmiss3039;
        return $this;
    }

    public function getFgmiss4049(): ?float
    {
        return $this->fgmiss4049;
    }

    public function setFgmiss4049(?float $fgmiss4049): SleeperLeagueScoringSettings
    {
        $this->fgmiss4049 = $fgmiss4049;
        return $this;
    }

    public function getFgmiss50p(): ?float
    {
        return $this->fgmiss50p;
    }

    public function setFgmiss50p(?float $fgmiss50p): SleeperLeagueScoringSettings
    {
        $this->fgmiss50p = $fgmiss50p;
        return $this;
    }

    public function getXpmiss(): ?float
    {
        return $this->xpmiss;
    }

    public function setXpmiss(?float $xpmiss): SleeperLeagueScoringSettings
    {
        $this->xpmiss = $xpmiss;
        return $this;
    }

    public function getDefTd(): ?float
    {
        return $this->defTd;
    }

    public function setDefTd(?float $defTd): SleeperLeagueScoringSettings
    {
        $this->defTd = $defTd;
        return $this;
    }

    public function getPtsAllow0(): ?float
    {
        return $this->ptsAllow0;
    }

    public function setPtsAllow0(?float $ptsAllow0): SleeperLeagueScoringSettings
    {
        $this->ptsAllow0 = $ptsAllow0;
        return $this;
    }

    public function getPtsAllow16(): ?float
    {
        return $this->ptsAllow16;
    }

    public function setPtsAllow16(?float $ptsAllow16): SleeperLeagueScoringSettings
    {
        $this->ptsAllow16 = $ptsAllow16;
        return $this;
    }

    public function getPtsAllow713(): ?float
    {
        return $this->ptsAllow713;
    }

    public function setPtsAllow713(?float $ptsAllow713): SleeperLeagueScoringSettings
    {
        $this->ptsAllow713 = $ptsAllow713;
        return $this;
    }

    public function getPtsAllow1420(): ?float
    {
        return $this->ptsAllow1420;
    }

    public function setPtsAllow1420(?float $ptsAllow1420): SleeperLeagueScoringSettings
    {
        $this->ptsAllow1420 = $ptsAllow1420;
        return $this;
    }

    public function getPtsAllow2127(): ?float
    {
        return $this->ptsAllow2127;
    }

    public function setPtsAllow2127(?float $ptsAllow2127): SleeperLeagueScoringSettings
    {
        $this->ptsAllow2127 = $ptsAllow2127;
        return $this;
    }

    public function getPtsAllow2834(): ?float
    {
        return $this->ptsAllow2834;
    }

    public function setPtsAllow2834(?float $ptsAllow2834): SleeperLeagueScoringSettings
    {
        $this->ptsAllow2834 = $ptsAllow2834;
        return $this;
    }

    public function getPtsAllow35p(): ?float
    {
        return $this->ptsAllow35p;
    }

    public function setPtsAllow35p(?float $ptsAllow35p): SleeperLeagueScoringSettings
    {
        $this->ptsAllow35p = $ptsAllow35p;
        return $this;
    }

    public function getPtsAllow(): ?float
    {
        return $this->ptsAllow;
    }

    public function setPtsAllow(?float $ptsAllow): SleeperLeagueScoringSettings
    {
        $this->ptsAllow = $ptsAllow;
        return $this;
    }

    public function getYdsAllow0100(): ?float
    {
        return $this->ydsAllow0100;
    }

    public function setYdsAllow0100(?float $ydsAllow0100): SleeperLeagueScoringSettings
    {
        $this->ydsAllow0100 = $ydsAllow0100;
        return $this;
    }

    public function getYdsAllow100199(): ?float
    {
        return $this->ydsAllow100199;
    }

    public function setYdsAllow100199(?float $ydsAllow100199): SleeperLeagueScoringSettings
    {
        $this->ydsAllow100199 = $ydsAllow100199;
        return $this;
    }

    public function getYdsAllow200299(): ?float
    {
        return $this->ydsAllow200299;
    }

    public function setYdsAllow200299(?float $ydsAllow200299): SleeperLeagueScoringSettings
    {
        $this->ydsAllow200299 = $ydsAllow200299;
        return $this;
    }

    public function getYdsAllow300349(): ?float
    {
        return $this->ydsAllow300349;
    }

    public function setYdsAllow300349(?float $ydsAllow300349): SleeperLeagueScoringSettings
    {
        $this->ydsAllow300349 = $ydsAllow300349;
        return $this;
    }

    public function getYdsAllow350399(): ?float
    {
        return $this->ydsAllow350399;
    }

    public function setYdsAllow350399(?float $ydsAllow350399): SleeperLeagueScoringSettings
    {
        $this->ydsAllow350399 = $ydsAllow350399;
        return $this;
    }

    public function getYdsAllow400449(): ?float
    {
        return $this->ydsAllow400449;
    }

    public function setYdsAllow400449(?float $ydsAllow400449): SleeperLeagueScoringSettings
    {
        $this->ydsAllow400449 = $ydsAllow400449;
        return $this;
    }

    public function getYdsAllow450499(): ?float
    {
        return $this->ydsAllow450499;
    }

    public function setYdsAllow450499(?float $ydsAllow450499): SleeperLeagueScoringSettings
    {
        $this->ydsAllow450499 = $ydsAllow450499;
        return $this;
    }

    public function getYdsAllow500549(): ?float
    {
        return $this->ydsAllow500549;
    }

    public function setYdsAllow500549(?float $ydsAllow500549): SleeperLeagueScoringSettings
    {
        $this->ydsAllow500549 = $ydsAllow500549;
        return $this;
    }

    public function getYdsAllow550p(): ?float
    {
        return $this->ydsAllow550p;
    }

    public function setYdsAllow550p(?float $ydsAllow550p): SleeperLeagueScoringSettings
    {
        $this->ydsAllow550p = $ydsAllow550p;
        return $this;
    }

    public function getYdsAllow(): ?float
    {
        return $this->ydsAllow;
    }

    public function setYdsAllow(?float $ydsAllow): SleeperLeagueScoringSettings
    {
        $this->ydsAllow = $ydsAllow;
        return $this;
    }

    public function getDef3andOut(): ?float
    {
        return $this->def3andOut;
    }

    public function setDef3andOut(?float $def3andOut): SleeperLeagueScoringSettings
    {
        $this->def3andOut = $def3andOut;
        return $this;
    }

    public function getDef4andStop(): ?float
    {
        return $this->def4andStop;
    }

    public function setDef4andStop(?float $def4andStop): SleeperLeagueScoringSettings
    {
        $this->def4andStop = $def4andStop;
        return $this;
    }

    public function getQbHit(): ?float
    {
        return $this->qbHit;
    }

    public function setQbHit(?float $qbHit): SleeperLeagueScoringSettings
    {
        $this->qbHit = $qbHit;
        return $this;
    }

    public function getSack(): ?float
    {
        return $this->sack;
    }

    public function setSack(?float $sack): SleeperLeagueScoringSettings
    {
        $this->sack = $sack;
        return $this;
    }

    public function getSackYd(): ?float
    {
        return $this->sackYd;
    }

    public function setSackYd(?float $sackYd): SleeperLeagueScoringSettings
    {
        $this->sackYd = $sackYd;
        return $this;
    }

    public function getInt(): ?float
    {
        return $this->int;
    }

    public function setInt(?float $int): SleeperLeagueScoringSettings
    {
        $this->int = $int;
        return $this;
    }

    public function getIntRetYd(): ?float
    {
        return $this->intRetYd;
    }

    public function setIntRetYd(?float $intRetYd): SleeperLeagueScoringSettings
    {
        $this->intRetYd = $intRetYd;
        return $this;
    }

    public function getFumRec(): ?float
    {
        return $this->fumRec;
    }

    public function setFumRec(?float $fumRec): SleeperLeagueScoringSettings
    {
        $this->fumRec = $fumRec;
        return $this;
    }

    public function getFumRetYd(): ?float
    {
        return $this->fumRetYd;
    }

    public function setFumRetYd(?float $fumRetYd): SleeperLeagueScoringSettings
    {
        $this->fumRetYd = $fumRetYd;
        return $this;
    }

    public function getTklLoss(): ?float
    {
        return $this->tklLoss;
    }

    public function setTklLoss(?float $tklLoss): SleeperLeagueScoringSettings
    {
        $this->tklLoss = $tklLoss;
        return $this;
    }

    public function getTklAst(): ?float
    {
        return $this->tklAst;
    }

    public function setTklAst(?float $tklAst): SleeperLeagueScoringSettings
    {
        $this->tklAst = $tklAst;
        return $this;
    }

    public function getTklSolo(): ?float
    {
        return $this->tklSolo;
    }

    public function setTklSolo(?float $tklSolo): SleeperLeagueScoringSettings
    {
        $this->tklSolo = $tklSolo;
        return $this;
    }

    public function getTkl(): ?float
    {
        return $this->tkl;
    }

    public function setTkl(?float $tkl): SleeperLeagueScoringSettings
    {
        $this->tkl = $tkl;
        return $this;
    }

    public function getSafe(): ?float
    {
        return $this->safe;
    }

    public function setSafe(?float $safe): SleeperLeagueScoringSettings
    {
        $this->safe = $safe;
        return $this;
    }

    public function getFf(): ?float
    {
        return $this->ff;
    }

    public function setFf(?float $ff): SleeperLeagueScoringSettings
    {
        $this->ff = $ff;
        return $this;
    }

    public function getBlkKick(): ?float
    {
        return $this->blkKick;
    }

    public function setBlkKick(?float $blkKick): SleeperLeagueScoringSettings
    {
        $this->blkKick = $blkKick;
        return $this;
    }

    public function getDefForcedPunts(): ?float
    {
        return $this->defForcedPunts;
    }

    public function setDefForcedPunts(?float $defForcedPunts): SleeperLeagueScoringSettings
    {
        $this->defForcedPunts = $defForcedPunts;
        return $this;
    }

    public function getDefPassDef(): ?float
    {
        return $this->defPassDef;
    }

    public function setDefPassDef(?float $defPassDef): SleeperLeagueScoringSettings
    {
        $this->defPassDef = $defPassDef;
        return $this;
    }

    public function getDef2pt(): ?float
    {
        return $this->def2pt;
    }

    public function setDef2pt(?float $def2pt): SleeperLeagueScoringSettings
    {
        $this->def2pt = $def2pt;
        return $this;
    }

    public function getFgRetYd(): ?float
    {
        return $this->fgRetYd;
    }

    public function setFgRetYd(?float $fgRetYd): SleeperLeagueScoringSettings
    {
        $this->fgRetYd = $fgRetYd;
        return $this;
    }

    public function getBlkKickRetYd(): ?float
    {
        return $this->blkKickRetYd;
    }

    public function setBlkKickRetYd(?float $blkKickRetYd): SleeperLeagueScoringSettings
    {
        $this->blkKickRetYd = $blkKickRetYd;
        return $this;
    }

    public function getDefStTd(): ?float
    {
        return $this->defStTd;
    }

    public function setDefStTd(?float $defStTd): SleeperLeagueScoringSettings
    {
        $this->defStTd = $defStTd;
        return $this;
    }

    public function getDefStFf(): ?float
    {
        return $this->defStFf;
    }

    public function setDefStFf(?float $defStFf): SleeperLeagueScoringSettings
    {
        $this->defStFf = $defStFf;
        return $this;
    }

    public function getDefStFumRec(): ?float
    {
        return $this->defStFumRec;
    }

    public function setDefStFumRec(?float $defStFumRec): SleeperLeagueScoringSettings
    {
        $this->defStFumRec = $defStFumRec;
        return $this;
    }

    public function getDefStTklSolo(): ?float
    {
        return $this->defStTklSolo;
    }

    public function setDefStTklSolo(?float $defStTklSolo): SleeperLeagueScoringSettings
    {
        $this->defStTklSolo = $defStTklSolo;
        return $this;
    }

    public function getDefPrYd(): ?float
    {
        return $this->defPrYd;
    }

    public function setDefPrYd(?float $defPrYd): SleeperLeagueScoringSettings
    {
        $this->defPrYd = $defPrYd;
        return $this;
    }

    public function getDefKrYd(): ?float
    {
        return $this->defKrYd;
    }

    public function setDefKrYd(?float $defKrYd): SleeperLeagueScoringSettings
    {
        $this->defKrYd = $defKrYd;
        return $this;
    }

    public function getStTd(): ?float
    {
        return $this->stTd;
    }

    public function setStTd(?float $stTd): SleeperLeagueScoringSettings
    {
        $this->stTd = $stTd;
        return $this;
    }

    public function getStFf(): ?float
    {
        return $this->stFf;
    }

    public function setStFf(?float $stFf): SleeperLeagueScoringSettings
    {
        $this->stFf = $stFf;
        return $this;
    }

    public function getStFumRec(): ?float
    {
        return $this->stFumRec;
    }

    public function setStFumRec(?float $stFumRec): SleeperLeagueScoringSettings
    {
        $this->stFumRec = $stFumRec;
        return $this;
    }

    public function getStTklSolo(): ?float
    {
        return $this->stTklSolo;
    }

    public function setStTklSolo(?float $stTklSolo): SleeperLeagueScoringSettings
    {
        $this->stTklSolo = $stTklSolo;
        return $this;
    }

    public function getPrYd(): ?float
    {
        return $this->prYd;
    }

    public function setPrYd(?float $prYd): SleeperLeagueScoringSettings
    {
        $this->prYd = $prYd;
        return $this;
    }

    public function getKrYd(): ?float
    {
        return $this->krYd;
    }

    public function setKrYd(?float $krYd): SleeperLeagueScoringSettings
    {
        $this->krYd = $krYd;
        return $this;
    }

    public function getFum(): ?float
    {
        return $this->fum;
    }

    public function setFum(?float $fum): SleeperLeagueScoringSettings
    {
        $this->fum = $fum;
        return $this;
    }

    public function getFumLost(): ?float
    {
        return $this->fumLost;
    }

    public function setFumLost(?float $fumLost): SleeperLeagueScoringSettings
    {
        $this->fumLost = $fumLost;
        return $this;
    }

    public function getFumRecTd(): ?float
    {
        return $this->fumRecTd;
    }

    public function setFumRecTd(?float $fumRecTd): SleeperLeagueScoringSettings
    {
        $this->fumRecTd = $fumRecTd;
        return $this;
    }

    public function getBonusRushYd100(): ?float
    {
        return $this->bonusRushYd100;
    }

    public function setBonusRushYd100(?float $bonusRushYd100): SleeperLeagueScoringSettings
    {
        $this->bonusRushYd100 = $bonusRushYd100;
        return $this;
    }

    public function getBonusRushYd200(): ?float
    {
        return $this->bonusRushYd200;
    }

    public function setBonusRushYd200(?float $bonusRushYd200): SleeperLeagueScoringSettings
    {
        $this->bonusRushYd200 = $bonusRushYd200;
        return $this;
    }

    public function getBonusRecYd100(): ?float
    {
        return $this->bonusRecYd100;
    }

    public function setBonusRecYd100(?float $bonusRecYd100): SleeperLeagueScoringSettings
    {
        $this->bonusRecYd100 = $bonusRecYd100;
        return $this;
    }

    public function getBonusRecYd200(): ?float
    {
        return $this->bonusRecYd200;
    }

    public function setBonusRecYd200(?float $bonusRecYd200): SleeperLeagueScoringSettings
    {
        $this->bonusRecYd200 = $bonusRecYd200;
        return $this;
    }

    public function getBonusPassYd300(): ?float
    {
        return $this->bonusPassYd300;
    }

    public function setBonusPassYd300(?float $bonusPassYd300): SleeperLeagueScoringSettings
    {
        $this->bonusPassYd300 = $bonusPassYd300;
        return $this;
    }

    public function getBonusPassYd400(): ?float
    {
        return $this->bonusPassYd400;
    }

    public function setBonusPassYd400(?float $bonusPassYd400): SleeperLeagueScoringSettings
    {
        $this->bonusPassYd400 = $bonusPassYd400;
        return $this;
    }

    public function getBonusRushRecYd100(): ?float
    {
        return $this->bonusRushRecYd100;
    }

    public function setBonusRushRecYd100(?float $bonusRushRecYd100): SleeperLeagueScoringSettings
    {
        $this->bonusRushRecYd100 = $bonusRushRecYd100;
        return $this;
    }

    public function getBonusRushRecYd200(): ?float
    {
        return $this->bonusRushRecYd200;
    }

    public function setBonusRushRecYd200(?float $bonusRushRecYd200): SleeperLeagueScoringSettings
    {
        $this->bonusRushRecYd200 = $bonusRushRecYd200;
        return $this;
    }

    public function getBonusPassCmp25(): ?float
    {
        return $this->bonusPassCmp25;
    }

    public function setBonusPassCmp25(?float $bonusPassCmp25): SleeperLeagueScoringSettings
    {
        $this->bonusPassCmp25 = $bonusPassCmp25;
        return $this;
    }

    public function getBonusRushAtt20(): ?float
    {
        return $this->bonusRushAtt20;
    }

    public function setBonusRushAtt20(?float $bonusRushAtt20): SleeperLeagueScoringSettings
    {
        $this->bonusRushAtt20 = $bonusRushAtt20;
        return $this;
    }

    public function getBonusFdRb(): ?float
    {
        return $this->bonusFdRb;
    }

    public function setBonusFdRb(?float $bonusFdRb): SleeperLeagueScoringSettings
    {
        $this->bonusFdRb = $bonusFdRb;
        return $this;
    }

    public function getBonusFdWr(): ?float
    {
        return $this->bonusFdWr;
    }

    public function setBonusFdWr(?float $bonusFdWr): SleeperLeagueScoringSettings
    {
        $this->bonusFdWr = $bonusFdWr;
        return $this;
    }

    public function getBonusFdTe(): ?float
    {
        return $this->bonusFdTe;
    }

    public function setBonusFdTe(?float $bonusFdTe): SleeperLeagueScoringSettings
    {
        $this->bonusFdTe = $bonusFdTe;
        return $this;
    }

    public function getBonusFdQb(): ?float
    {
        return $this->bonusFdQb;
    }

    public function setBonusFdQb(?float $bonusFdQb): SleeperLeagueScoringSettings
    {
        $this->bonusFdQb = $bonusFdQb;
        return $this;
    }

    public function getIdpDefTd(): ?float
    {
        return $this->idpDefTd;
    }

    public function setIdpDefTd(?float $idpDefTd): SleeperLeagueScoringSettings
    {
        $this->idpDefTd = $idpDefTd;
        return $this;
    }

    public function getIdpSack(): ?float
    {
        return $this->idpSack;
    }

    public function setIdpSack(?float $idpSack): SleeperLeagueScoringSettings
    {
        $this->idpSack = $idpSack;
        return $this;
    }

    public function getIdpSackYd(): ?float
    {
        return $this->idpSackYd;
    }

    public function setIdpSackYd(?float $idpSackYd): SleeperLeagueScoringSettings
    {
        $this->idpSackYd = $idpSackYd;
        return $this;
    }

    public function getIdpQbHit(): ?float
    {
        return $this->idpQbHit;
    }

    public function setIdpQbHit(?float $idpQbHit): SleeperLeagueScoringSettings
    {
        $this->idpQbHit = $idpQbHit;
        return $this;
    }

    public function getIdpTkl(): ?float
    {
        return $this->idpTkl;
    }

    public function setIdpTkl(?float $idpTkl): SleeperLeagueScoringSettings
    {
        $this->idpTkl = $idpTkl;
        return $this;
    }

    public function getIdpTklLoss(): ?float
    {
        return $this->idpTklLoss;
    }

    public function setIdpTklLoss(?float $idpTklLoss): SleeperLeagueScoringSettings
    {
        $this->idpTklLoss = $idpTklLoss;
        return $this;
    }

    public function getIdpBlkKick(): ?float
    {
        return $this->idpBlkKick;
    }

    public function setIdpBlkKick(?float $idpBlkKick): SleeperLeagueScoringSettings
    {
        $this->idpBlkKick = $idpBlkKick;
        return $this;
    }

    public function getIdpInt(): ?float
    {
        return $this->idpInt;
    }

    public function setIdpInt(?float $idpInt): SleeperLeagueScoringSettings
    {
        $this->idpInt = $idpInt;
        return $this;
    }

    public function getIdpIntRetYd(): ?float
    {
        return $this->idpIntRetYd;
    }

    public function setIdpIntRetYd(?float $idpIntRetYd): SleeperLeagueScoringSettings
    {
        $this->idpIntRetYd = $idpIntRetYd;
        return $this;
    }

    public function getIdpFumRec(): ?float
    {
        return $this->idpFumRec;
    }

    public function setIdpFumRec(?float $idpFumRec): SleeperLeagueScoringSettings
    {
        $this->idpFumRec = $idpFumRec;
        return $this;
    }

    public function getIdpFumRetYd(): ?float
    {
        return $this->idpFumRetYd;
    }

    public function setIdpFumRetYd(?float $idpFumRetYd): SleeperLeagueScoringSettings
    {
        $this->idpFumRetYd = $idpFumRetYd;
        return $this;
    }

    public function getIdpFf(): ?float
    {
        return $this->idpFf;
    }

    public function setIdpFf(?float $idpFf): SleeperLeagueScoringSettings
    {
        $this->idpFf = $idpFf;
        return $this;
    }

    public function getIdpSafe(): ?float
    {
        return $this->idpSafe;
    }

    public function setIdpSafe(?float $idpSafe): SleeperLeagueScoringSettings
    {
        $this->idpSafe = $idpSafe;
        return $this;
    }

    public function getIdpTklAst(): ?float
    {
        return $this->idpTklAst;
    }

    public function setIdpTklAst(?float $idpTklAst): SleeperLeagueScoringSettings
    {
        $this->idpTklAst = $idpTklAst;
        return $this;
    }

    public function getIdpTklSolo(): ?float
    {
        return $this->idpTklSolo;
    }

    public function setIdpTklSolo(?float $idpTklSolo): SleeperLeagueScoringSettings
    {
        $this->idpTklSolo = $idpTklSolo;
        return $this;
    }

    public function getIdpPassDef(): ?float
    {
        return $this->idpPassDef;
    }

    public function setIdpPassDef(?float $idpPassDef): SleeperLeagueScoringSettings
    {
        $this->idpPassDef = $idpPassDef;
        return $this;
    }

    public function getBonusTkl10p(): ?float
    {
        return $this->bonusTkl10p;
    }

    public function setBonusTkl10p(?float $bonusTkl10p): SleeperLeagueScoringSettings
    {
        $this->bonusTkl10p = $bonusTkl10p;
        return $this;
    }

    public function getBonusSack2p(): ?float
    {
        return $this->bonusSack2p;
    }

    public function setBonusSack2p(?float $bonusSack2p): SleeperLeagueScoringSettings
    {
        $this->bonusSack2p = $bonusSack2p;
        return $this;
    }

    public function getIdpPassDef3p(): ?float
    {
        return $this->idpPassDef3p;
    }

    public function setIdpPassDef3p(?float $idpPassDef3p): SleeperLeagueScoringSettings
    {
        $this->idpPassDef3p = $idpPassDef3p;
        return $this;
    }

    public function getBonusDefIntTd50p(): ?float
    {
        return $this->bonusDefIntTd50p;
    }

    public function setBonusDefIntTd50p(?float $bonusDefIntTd50p): SleeperLeagueScoringSettings
    {
        $this->bonusDefIntTd50p = $bonusDefIntTd50p;
        return $this;
    }

    public function getBonusDefFumTd50p(): ?float
    {
        return $this->bonusDefFumTd50p;
    }

    public function setBonusDefFumTd50p(?float $bonusDefFumTd50p): SleeperLeagueScoringSettings
    {
        $this->bonusDefFumTd50p = $bonusDefFumTd50p;
        return $this;
    }
}
