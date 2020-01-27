<?php


namespace BeesInTheTrap\Domain;


class Game
{
    private $hive;

    public function __construct()
    {
        $this->hive = HiveFactory::getHive();
    }

    public function takeTurn() {

    }
}