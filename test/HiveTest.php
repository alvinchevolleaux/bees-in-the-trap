<?php


namespace Test;


use BeesInTheTrap\Domain\DroneBee;
use BeesInTheTrap\Domain\HiveFactory;
use BeesInTheTrap\Domain\QueenBee;
use BeesInTheTrap\Domain\WorkerBee;
use http\Exception\RuntimeException;
use PHPUnit\Framework\TestCase;

class HiveTest extends TestCase
{
    public function testHiveComposition() {
        $hive = HiveFactory::getHive();
        $bees = $hive->getBees();

        $queenCount = 0;
        $workerCount = 0;
        $droneCount = 0;

        foreach ($bees as $bee) {
            switch (get_class($bee)) {
                case QueenBee::class:
                    $queenCount++;
                break;

                case WorkerBee::class:
                    $workerCount++;
                break;

                case DroneBee::class:
                    $droneCount++;
                break;

                default:
                    throw new \Exception("Unexpected type in hive");
            }
        }

        $this->assertEquals(1, $queenCount);
        $this->assertEquals(5, $workerCount);
        $this->assertEquals(8,  $droneCount);
    }
}