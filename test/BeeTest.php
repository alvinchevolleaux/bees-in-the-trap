<?php

namespace Test;

use BeesInTheTrap\Domain\BeeFactory;
use PHPUnit\Framework\TestCase;

class BeeTest extends TestCase
{
    public function testQueenStats()
    {

        $initialHitPoints = 100;

        $queenBee = BeeFactory::getBee(BeeFactory::QUEEN);
        $this->assertEquals($initialHitPoints, $queenBee->getHitPoints());
        $queenBee->receiveHit();
        $this->assertEquals(8, $initialHitPoints - $queenBee->getHitPoints());
    }

    public function testWorkerStats()
    {

        $initialHitPoints = 75;

        $workerBee = BeeFactory::getBee(BeeFactory::WORKER);
        $this->assertEquals($initialHitPoints, $workerBee->getHitPoints());
        $workerBee->receiveHit();
        $this->assertEquals(10, $initialHitPoints - $workerBee->getHitPoints());
    }

    public function testDroneStats()
    {

        $initialHitPoints = 50;

        $droneBee = BeeFactory::getBee(BeeFactory::DRONE);
        $this->assertEquals($initialHitPoints, $droneBee->getHitPoints());
        $droneBee->receiveHit();
        $this->assertEquals(12, $initialHitPoints - $droneBee->getHitPoints());
    }
}