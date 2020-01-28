<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class Hive
{
    private BeeCollectionImmutable $bees;

    public function __construct(BeeCollectionImmutable $bees)
    {
        $this->bees = $bees;
    }

    public function getBees() : BeeCollectionImmutable {
        return $this->bees;
    }

    public function hiveDestroyed() : bool {

        if (!$this->getQueenBee()->isAlive()) {
            return true;
        }

        /** @var Bee $bee */
        foreach ($this->bees as $bee) {
            if ($bee->isAlive()) {
                return false;
            }
        }

        return true;
    }

    private function getQueenBee() : QueenBee {
        foreach ($this->bees as $bee) {
            if ($bee instanceof QueenBee) {
                return $bee;
            }
        }

        throw new \RuntimeException("Could not find Queen Bee in Hive");
    }
}