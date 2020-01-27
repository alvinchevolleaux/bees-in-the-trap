<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;

use Zend\Math\Rand;

class Game
{
    private $hive;

    public function __construct()
    {
        $this->hive = HiveFactory::getHive();
    }

    public function takeTurn() {
        $bee = $this->getRandomBee();
    }

    private function getRandomLivingBee() : Bee {
        do {
            $bees = $this->hive->getBees();
            $beeNumber = Rand::getInteger(0, count($bees));
            /** @var Bee $bee */
            $bee = $bees[$beeNumber];
        } while (!$bee->isAlive());

        return $bee;
    }
}