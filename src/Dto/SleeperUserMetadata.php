<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperUserMetadata
{
    private ?string $userMessagePn = null;

    private ?string $transactionWaiver = null;

    private ?string $transactionTrade = null;

    private ?string $transactionFreeAgent = null;

    private ?string $transactionCommissioner = null;

    private ?string $tradeBlockPn = null;

    private ?string $teamNameUpdate = null;

    private ?string $playerNicknameUpdate = null;

    private ?string $playerLikePn = null;

    private ?string $mentionPn = null;

    private ?string $mascotMessage = null;

    private ?string $joinVoicePn = null;

    private ?string $archived = null;

    private ?string $allowPn = null;

    private ?string $mascotMessageEmotionLeg1 = null;

    private ?string $mascotItemTypeIdLeg1 = null;

    private ?string $mascotItemTypeIdLeg2 = null;

    private ?string $mascotItemTypeIdLeg3 = null;

    private ?string $mascotItemTypeIdLeg4 = null;

    private ?string $mascotItemTypeIdLeg5 = null;

    private ?string $mascotItemTypeIdLeg6 = null;

    private ?string $mascotItemTypeIdLeg7 = null;

    private ?string $mascotItemTypeIdLeg8 = null;

    private ?string $mascotItemTypeIdLeg9 = null;

    private ?string $mascotItemTypeIdLeg10 = null;

    private ?string $mascotItemTypeIdLeg11 = null;

    private ?string $mascotItemTypeIdLeg12 = null;

    private ?string $mascotItemTypeIdLeg13 = null;

    private ?string $mascotItemTypeIdLeg14 = null;

    private ?string $mascotItemTypeIdLeg15 = null;

    private ?string $mascotItemTypeIdLeg16 = null;

    private ?string $mascotItemTypeIdLeg17 = null;

    private ?string $mascotItemTypeIdLeg18 = null;

    public function getUserMessagePn(): ?string
    {
        return $this->userMessagePn;
    }

    public function setUserMessagePn(?string $userMessagePn): SleeperUserMetadata
    {
        $this->userMessagePn = $userMessagePn;
        return $this;
    }

    public function getTransactionWaiver(): ?string
    {
        return $this->transactionWaiver;
    }

    public function setTransactionWaiver(?string $transactionWaiver): SleeperUserMetadata
    {
        $this->transactionWaiver = $transactionWaiver;
        return $this;
    }

    public function getTransactionTrade(): ?string
    {
        return $this->transactionTrade;
    }

    public function setTransactionTrade(?string $transactionTrade): SleeperUserMetadata
    {
        $this->transactionTrade = $transactionTrade;
        return $this;
    }

    public function getTransactionFreeAgent(): ?string
    {
        return $this->transactionFreeAgent;
    }

    public function setTransactionFreeAgent(?string $transactionFreeAgent): SleeperUserMetadata
    {
        $this->transactionFreeAgent = $transactionFreeAgent;
        return $this;
    }

    public function getTransactionCommissioner(): ?string
    {
        return $this->transactionCommissioner;
    }

    public function setTransactionCommissioner(?string $transactionCommissioner): SleeperUserMetadata
    {
        $this->transactionCommissioner = $transactionCommissioner;
        return $this;
    }

    public function getTradeBlockPn(): ?string
    {
        return $this->tradeBlockPn;
    }

    public function setTradeBlockPn(?string $tradeBlockPn): SleeperUserMetadata
    {
        $this->tradeBlockPn = $tradeBlockPn;
        return $this;
    }

    public function getTeamNameUpdate(): ?string
    {
        return $this->teamNameUpdate;
    }

    public function setTeamNameUpdate(?string $teamNameUpdate): SleeperUserMetadata
    {
        $this->teamNameUpdate = $teamNameUpdate;
        return $this;
    }

    public function getPlayerNicknameUpdate(): ?string
    {
        return $this->playerNicknameUpdate;
    }

    public function setPlayerNicknameUpdate(?string $playerNicknameUpdate): SleeperUserMetadata
    {
        $this->playerNicknameUpdate = $playerNicknameUpdate;
        return $this;
    }

    public function getPlayerLikePn(): ?string
    {
        return $this->playerLikePn;
    }

    public function setPlayerLikePn(?string $playerLikePn): SleeperUserMetadata
    {
        $this->playerLikePn = $playerLikePn;
        return $this;
    }

    public function getMentionPn(): ?string
    {
        return $this->mentionPn;
    }

    public function setMentionPn(?string $mentionPn): SleeperUserMetadata
    {
        $this->mentionPn = $mentionPn;
        return $this;
    }

    public function getMascotMessage(): ?string
    {
        return $this->mascotMessage;
    }

    public function setMascotMessage(?string $mascotMessage): SleeperUserMetadata
    {
        $this->mascotMessage = $mascotMessage;
        return $this;
    }

    public function getJoinVoicePn(): ?string
    {
        return $this->joinVoicePn;
    }

    public function setJoinVoicePn(?string $joinVoicePn): SleeperUserMetadata
    {
        $this->joinVoicePn = $joinVoicePn;
        return $this;
    }

    public function getArchived(): ?string
    {
        return $this->archived;
    }

    public function setArchived(?string $archived): SleeperUserMetadata
    {
        $this->archived = $archived;
        return $this;
    }

    public function getAllowPn(): ?string
    {
        return $this->allowPn;
    }

    public function setAllowPn(?string $allowPn): SleeperUserMetadata
    {
        $this->allowPn = $allowPn;
        return $this;
    }

    public function getMascotMessageEmotionLeg1(): ?string
    {
        return $this->mascotMessageEmotionLeg1;
    }

    public function setMascotMessageEmotionLeg1(?string $mascotMessageEmotionLeg1): SleeperUserMetadata
    {
        $this->mascotMessageEmotionLeg1 = $mascotMessageEmotionLeg1;
        return $this;
    }

    public function getMascotItemTypeIdLeg1(): ?string
    {
        return $this->mascotItemTypeIdLeg1;
    }

    public function setMascotItemTypeIdLeg1(?string $mascotItemTypeIdLeg1): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg1 = $mascotItemTypeIdLeg1;
        return $this;
    }

    public function getMascotItemTypeIdLeg2(): ?string
    {
        return $this->mascotItemTypeIdLeg2;
    }

    public function setMascotItemTypeIdLeg2(?string $mascotItemTypeIdLeg2): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg2 = $mascotItemTypeIdLeg2;
        return $this;
    }

    public function getMascotItemTypeIdLeg3(): ?string
    {
        return $this->mascotItemTypeIdLeg3;
    }

    public function setMascotItemTypeIdLeg3(?string $mascotItemTypeIdLeg3): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg3 = $mascotItemTypeIdLeg3;
        return $this;
    }

    public function getMascotItemTypeIdLeg4(): ?string
    {
        return $this->mascotItemTypeIdLeg4;
    }

    public function setMascotItemTypeIdLeg4(?string $mascotItemTypeIdLeg4): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg4 = $mascotItemTypeIdLeg4;
        return $this;
    }

    public function getMascotItemTypeIdLeg5(): ?string
    {
        return $this->mascotItemTypeIdLeg5;
    }

    public function setMascotItemTypeIdLeg5(?string $mascotItemTypeIdLeg5): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg5 = $mascotItemTypeIdLeg5;
        return $this;
    }

    public function getMascotItemTypeIdLeg6(): ?string
    {
        return $this->mascotItemTypeIdLeg6;
    }

    public function setMascotItemTypeIdLeg6(?string $mascotItemTypeIdLeg6): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg6 = $mascotItemTypeIdLeg6;
        return $this;
    }

    public function getMascotItemTypeIdLeg7(): ?string
    {
        return $this->mascotItemTypeIdLeg7;
    }

    public function setMascotItemTypeIdLeg7(?string $mascotItemTypeIdLeg7): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg7 = $mascotItemTypeIdLeg7;
        return $this;
    }

    public function getMascotItemTypeIdLeg8(): ?string
    {
        return $this->mascotItemTypeIdLeg8;
    }

    public function setMascotItemTypeIdLeg8(?string $mascotItemTypeIdLeg8): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg8 = $mascotItemTypeIdLeg8;
        return $this;
    }

    public function getMascotItemTypeIdLeg9(): ?string
    {
        return $this->mascotItemTypeIdLeg9;
    }

    public function setMascotItemTypeIdLeg9(?string $mascotItemTypeIdLeg9): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg9 = $mascotItemTypeIdLeg9;
        return $this;
    }

    public function getMascotItemTypeIdLeg10(): ?string
    {
        return $this->mascotItemTypeIdLeg10;
    }

    public function setMascotItemTypeIdLeg10(?string $mascotItemTypeIdLeg10): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg10 = $mascotItemTypeIdLeg10;
        return $this;
    }

    public function getMascotItemTypeIdLeg11(): ?string
    {
        return $this->mascotItemTypeIdLeg11;
    }

    public function setMascotItemTypeIdLeg11(?string $mascotItemTypeIdLeg11): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg11 = $mascotItemTypeIdLeg11;
        return $this;
    }

    public function getMascotItemTypeIdLeg12(): ?string
    {
        return $this->mascotItemTypeIdLeg12;
    }

    public function setMascotItemTypeIdLeg12(?string $mascotItemTypeIdLeg12): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg12 = $mascotItemTypeIdLeg12;
        return $this;
    }

    public function getMascotItemTypeIdLeg13(): ?string
    {
        return $this->mascotItemTypeIdLeg13;
    }

    public function setMascotItemTypeIdLeg13(?string $mascotItemTypeIdLeg13): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg13 = $mascotItemTypeIdLeg13;
        return $this;
    }

    public function getMascotItemTypeIdLeg14(): ?string
    {
        return $this->mascotItemTypeIdLeg14;
    }

    public function setMascotItemTypeIdLeg14(?string $mascotItemTypeIdLeg14): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg14 = $mascotItemTypeIdLeg14;
        return $this;
    }

    public function getMascotItemTypeIdLeg15(): ?string
    {
        return $this->mascotItemTypeIdLeg15;
    }

    public function setMascotItemTypeIdLeg15(?string $mascotItemTypeIdLeg15): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg15 = $mascotItemTypeIdLeg15;
        return $this;
    }

    public function getMascotItemTypeIdLeg16(): ?string
    {
        return $this->mascotItemTypeIdLeg16;
    }

    public function setMascotItemTypeIdLeg16(?string $mascotItemTypeIdLeg16): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg16 = $mascotItemTypeIdLeg16;
        return $this;
    }

    public function getMascotItemTypeIdLeg17(): ?string
    {
        return $this->mascotItemTypeIdLeg17;
    }

    public function setMascotItemTypeIdLeg17(?string $mascotItemTypeIdLeg17): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg17 = $mascotItemTypeIdLeg17;
        return $this;
    }

    public function getMascotItemTypeIdLeg18(): ?string
    {
        return $this->mascotItemTypeIdLeg18;
    }

    public function setMascotItemTypeIdLeg18(?string $mascotItemTypeIdLeg18): SleeperUserMetadata
    {
        $this->mascotItemTypeIdLeg18 = $mascotItemTypeIdLeg18;
        return $this;
    }
}