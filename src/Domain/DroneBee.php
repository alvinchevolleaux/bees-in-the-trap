<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class DroneBee extends AbstractBee
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
}