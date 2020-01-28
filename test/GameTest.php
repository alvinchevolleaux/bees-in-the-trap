<?php

namespace Test;

use BeesInTheTrap\Domain\GameFactory;
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