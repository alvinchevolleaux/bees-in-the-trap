<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


final class DroneBee implements Bee
{
    private $hitPoints;

    public function __construct()
    {
        $this->hitPoints = 50;
    }

    public function getHitPoints() : int
    {
        return $this->hitPoints;
    }

    public function receiveHit(): void
    {
        $this->hitPoints -= 12;
    }

    public function isAlive(): bool
    {
        return $this->hitPoints > 0;
    }
}