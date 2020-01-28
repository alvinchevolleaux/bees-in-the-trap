<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


final class DroneBee implements Bee
{
    const HIT_VALUE = 12;
    const HIT_POINTS = 50;

    private int $hitPoints;

    public function type(): string
    {
        return "Drone Bee";
    }


    public function __construct()
    {
        $this->hitPoints = self::HIT_POINTS;
    }

    public function getHitPoints() : int
    {
        return $this->hitPoints;
    }

    public function hit(): int
    {
        $this->hitPoints -= self::HIT_VALUE;
        return self::HIT_VALUE;
    }

    public function isAlive(): bool
    {
        return $this->hitPoints > 0;
    }
}