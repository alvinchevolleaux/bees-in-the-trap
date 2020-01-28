<?php


namespace Test;


use BeesInTheTrap\Domain\BeeCollectionImmutable;
use BeesInTheTrap\Domain\DroneBee;
use BeesInTheTrap\Domain\Hive;
use BeesInTheTrap\Domain\HiveFactory;
use BeesInTheTrap\Domain\QueenBee;
use BeesInTheTrap\Domain\WorkerBee;
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

    public function testHiveDestroyedWhenQueenDies() {
        $queenBee = new QueenBee();
        $workerBee = new WorkerBee();

        $hive = new Hive(new BeeCollectionImmutable([$queenBee, $workerBee]));
        for ($i = 0; $i < 13; $i++) {
            $queenBee->hit();
        }

        $this->assertTrue($hive->hiveDestroyed());
    }
}