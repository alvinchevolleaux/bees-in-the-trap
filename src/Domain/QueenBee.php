<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


final class QueenBee extends Bee
{
    private $hitPoints;

    public function __construct()
    {
        $this->hitPoints = 100;
    }

    public function getHitPoints() : int
    {
        return $this->hitPoints;
    }

    public function receiveHit(): void
    {
        $this->hitPoints -= 8;
    }
}