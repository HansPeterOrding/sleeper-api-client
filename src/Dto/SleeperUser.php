<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperUser
{
    private ?string $verification = null;

    private SleeperUserMetadata $metadata;

    private string $username;

    private string $userId;

    private ?string $token = null;

    private ?string $summonerRegion = null;

    private ?string $summonerName = null;

    private ?string $solicitable = null;

    private ?string $realName = null;

    private ?string $phone = null;

    private ?string $pending = null;

    private bool $isBot;

    private ?string $email = null;

    private ?string $displayName = null;

    private ?string $avatar = null;

    public function getVerification(): ?string
    {
        return $this->verification;
    }

    public function setVerification(?string $verification): SleeperUser
    {
        $this->verification = $verification;
        return $this;
    }

    public function getMetadata(): SleeperUserMetadata
    {
        return $this->metadata;
    }

    public function setMetadata(SleeperUserMetadata $metadata): SleeperUser
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): SleeperUser
    {
        $this->username = $username;
        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): SleeperUser
    {
        $this->userId = $userId;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): SleeperUser
    {
        $this->token = $token;
        return $this;
    }

    public function getSummonerRegion(): ?string
    {
        return $this->summonerRegion;
    }

    public function setSummonerRegion(?string $summonerRegion): SleeperUser
    {
        $this->summonerRegion = $summonerRegion;
        return $this;
    }

    public function getSummonerName(): ?string
    {
        return $this->summonerName;
    }

    public function setSummonerName(?string $summonerName): SleeperUser
    {
        $this->summonerName = $summonerName;
        return $this;
    }

    public function getSolicitable(): ?string
    {
        return $this->solicitable;
    }

    public function setSolicitable(?string $solicitable): SleeperUser
    {
        $this->solicitable = $solicitable;
        return $this;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(?string $realName): SleeperUser
    {
        $this->realName = $realName;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): SleeperUser
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPending(): ?string
    {
        return $this->pending;
    }

    public function setPending(?string $pending): SleeperUser
    {
        $this->pending = $pending;
        return $this;
    }

    public function isBot(): bool
    {
        return $this->isBot;
    }

    public function setIsBot(bool $isBot): SleeperUser
    {
        $this->isBot = $isBot;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): SleeperUser
    {
        $this->email = $email;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): SleeperUser
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): SleeperUser
    {
        $this->avatar = $avatar;
        return $this;
    }
}