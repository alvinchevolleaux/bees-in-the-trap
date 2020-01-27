<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


abstract class Bee
{
    abstract public function getHitPoints() : int;
    abstract public function receiveHit() : void;
    final public function isAlive() : bool {
        if ($this->getHitPoints() <= 0) {
            return false;
        }

        return true;
    }
}