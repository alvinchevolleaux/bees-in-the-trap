<?php

namespace Test;

use BeesInTheTrap\Domain\BeeFactory;
use PHPUnit\Framework\TestCase;

class BeeTest extends TestCase
{
    public function testQueenStats() {
        $queenBee = BeeFactory::getBee(BeeFactory::QUEEN);
        $this->assertEquals(100, $queenBee->getHitPoints());
    }

    public function testWorkerStats() {
        $workerBee = BeeFactory::getBee(BeeFactory::WORKER);
        $this->assertEquals(75, $workerBee->getHitPoints());
    }

    public function testDroneStats() {
        $droneBee = BeeFactory::getBee(BeeFactory::DRONE);
        $this->assertEquals(50, $droneBee->getHitPoints());
    }
}