<?php


namespace BeesInTheTrap\Domain;


interface Bee
{
    public function type() : string;
    public function getHitPoints() : int;
    public function hit() : int;
    public function isAlive() : bool;
}