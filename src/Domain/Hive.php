<?php

declare(strict_types=1);

namespace BeesInTheTrap\Domain;


class Hive
{
    private $bees;

    public function __construct(BeeCollectionImmutable $bees)
    {
        $this->bees = $bees;
    }

    public function getBees() : BeeCollectionImmutable {
        return $this->bees;
    }

    public function hiveDestroyed() : bool {
        /** @var Bee $bee */
        foreach ($this->bees as $bee) {
            if ($bee->isAlive()) {
                return false;
            }
        }

        return true;
    }
}