<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class HiveFactory
{
    const QUEEN = 1;
    const WORKERS = 5;
    const DRONES = 8;

    private static $beeTypes = [
        BeeFactory::QUEEN => self::QUEEN,
        BeeFactory::WORKER => self::WORKERS,
        BeeFactory::DRONE => self::DRONES
    ];

    /**
     * @return Hive
     * @throws \Exception
     */
    public static function getHive() : Hive
    {
        $bees = [];

        foreach (static::$beeTypes as $type => $count) {
            for ($i = 0; $i < $count; $i++) {
                $bees[] = BeeFactory::getBee($type);
            }
        }

        return new Hive(new BeeCollectionImmutable($bees));
    }
}