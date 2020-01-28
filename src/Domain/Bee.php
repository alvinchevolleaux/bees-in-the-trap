<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;

interface Bee
{
    public function type() : string;
    public function getHitPoints() : int;
    public function hit() : int;
    public function isAlive() : bool;
}
