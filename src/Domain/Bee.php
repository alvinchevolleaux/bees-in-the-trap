<?php


namespace BeesInTheTrap\Domain;


interface Bee
{
    public function getHitPoints() : int;
    public function receiveHit() : void;
    public function isAlive() : bool;
}