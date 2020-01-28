<?php


namespace BeesInTheTrap\Domain;


use http\Exception\RuntimeException;
use PHPUnit\Exception;
use Webmozart\Assert\Assert;

class BeeCollectionImmutable implements \Iterator, \Countable
{
    private $bees;

    private int $position = 0;

    public function __construct(array $bees)
    {
        try {
            Assert::allIsInstanceOf($bees, Bee::class);
        } catch (Exception $e) {
            throw new RuntimeException(sprintf("Invalid array, all items must be of type %s", Bee::class));
        }

        $this->bees = $bees;
    }

    public function current()
    {
        return $this->bees[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->bees[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function count()
    {
        return \count($this->bees);
    }

    public function getItem(int $offset) : Bee {
        return $this->bees[$offset];
    }
}