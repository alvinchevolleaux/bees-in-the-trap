<?php


namespace Test;


use BeesInTheTrap\Domain\Bee;
use BeesInTheTrap\Domain\BeeCollectionImmutable;
use BeesInTheTrap\Domain\DroneBee;
use BeesInTheTrap\Domain\Game;
use BeesInTheTrap\Domain\GameFactory;
use BeesInTheTrap\Domain\Hive;
use BeesInTheTrap\Domain\QueenBee;
use BeesInTheTrap\Domain\WorkerBee;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function testFullGame() {
        $game = GameFactory::createGame();
        $i = 0;
        do {
            $game->takeTurn();
            $i++;
        } while (!$game->gameOver());

        $this->assertGreaterThan(13, $i);
        $this->assertLessThan(94, $i);
    }
}