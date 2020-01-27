<?php


namespace BeesInTheTrap\Domain;


class BeeFactory
{
    const QUEEN = 'queen';
    const DRONE = 'drone';
    const WORKER = 'worker';

    public static function getBee(string $type) : AbstractBee {
        switch ($type) {
            case static::QUEEN:
                return new QueenBee();
            break;

            case static::DRONE:
                return new DroneBee();
            break;

            case static::WORKER:
                return new WorkerBee();
            break;

            default:
                throw new \Exception("Unrecognised bee type");
        }
    }
}