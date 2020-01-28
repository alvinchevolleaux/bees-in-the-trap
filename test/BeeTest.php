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
        $damage = $queenBee->hit();
        $this->assertEquals(8, $damage);
        $this->assertEquals(8, $initialHitPoints - $queenBee->getHitPoints());
        $this->assertEquals("Queen Bee", $queenBee->type());
    }

    public function testWorkerStats()
    {
        $initialHitPoints = 75;

        $workerBee = BeeFactory::getBee(BeeFactory::WORKER);
        $this->assertEquals($initialHitPoints, $workerBee->getHitPoints());
        $damage = $workerBee->hit();
        $this->assertEquals(10, $damage);
        $this->assertEquals(10, $initialHitPoints - $workerBee->getHitPoints());
        $this->assertEquals("Worker Bee", $workerBee->type());
    }

    public function testDroneStats()
    {
        $initialHitPoints = 50;

        $droneBee = BeeFactory::getBee(BeeFactory::DRONE);
        $this->assertEquals($initialHitPoints, $droneBee->getHitPoints());
        $damage = $droneBee->hit();
        $this->assertEquals(12, $damage);
        $this->assertEquals(12, $initialHitPoints - $droneBee->getHitPoints());
        $this->assertEquals("Drone Bee", $droneBee->type());
    }
}