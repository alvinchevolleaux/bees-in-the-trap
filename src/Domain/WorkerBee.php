<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


final class WorkerBee extends Bee
{
    private $hitPoints;

    public function __construct()
    {
        $this->hitPoints = 75;
    }

    public function getHitPoints(): int
    {
        return $this->hitPoints;
    }

    public function receiveHit(): void
    {
        $this->hitPoints -= 10;
    }
}