<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\Dto;

class SleeperMatchup
{
    private array $starters = [];

    private int $rosterId;

    private array $players = [];

    private int $matchupId;

    private float $points;

    private float $customPoints;
}