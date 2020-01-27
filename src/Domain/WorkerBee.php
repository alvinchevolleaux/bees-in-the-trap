<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class WorkerBee extends AbstractBee
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
}