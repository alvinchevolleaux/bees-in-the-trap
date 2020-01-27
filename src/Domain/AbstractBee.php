<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


abstract class AbstractBee
{
    abstract public function getHitPoints() : int;
}