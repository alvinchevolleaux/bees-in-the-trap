<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;

class Game
{
    private Hive $hive;

    private bool $gameOver = false;

    public function __construct(Hive $hive)
    {
        $this->hive = $hive;
    }

    public function gameOver() : bool
    {
        return $this->gameOver;
    }

    public function takeTurn() : string
    {
        if ($this->gameOver) {
            throw new \RuntimeException("Game is over!");
        }

        $bee = $this->getRandomLivingBee();
        $damage = $bee->hit();

        if ($this->hive->hiveDestroyed()) {
            $this->gameOver = true;
        }

        return sprintf("Direct Hit. You took %d hit points from a %s", $damage, $bee->type());
    }

    private function getRandomLivingBee() : Bee
    {
        do {
            $bees = $this->hive->getBees();
            $beeNumber = random_int(0, count($bees) - 1);
            /** @var Bee $bee */
            $bee = $bees->getItem($beeNumber);
        } while (!$bee->isAlive());

        return $bee;
    }
}
