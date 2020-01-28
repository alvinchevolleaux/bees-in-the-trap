<?php


namespace Test;


use BeesInTheTrap\Domain\BeeCollectionImmutable;
use BeesInTheTrap\Domain\DroneBee;
use BeesInTheTrap\Domain\Hive;
use BeesInTheTrap\Domain\QueenBee;
use BeesInTheTrap\Domain\WorkerBee;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class BeeCollectionImmutableTest extends TestCase
{
    public function testOnlyInstancesOfBeeAllowed() {
        $this->expectException(RuntimeException::class);
        $badBees = [new QueenBee(), new WorkerBee(), new \ArrayObject()];
        new BeeCollectionImmutable($badBees);
    }

    public function testCount() {
        $bees = [];
        for ($i = 0; $i < 10; $i++) {
            $bees[] = new DroneBee();
        }

        $beeCollection = new BeeCollectionImmutable($bees);
        $this->assertEquals(10, $beeCollection->count());
    }
}