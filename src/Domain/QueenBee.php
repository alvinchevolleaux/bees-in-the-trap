<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class QueenBee extends AbstractBee
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
}