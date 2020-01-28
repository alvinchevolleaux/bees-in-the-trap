<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;

class GameFactory
{
    public static function createGame()
    {
        $hive = HiveFactory::getHive();
        return new Game($hive);
    }
}