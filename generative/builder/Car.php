<?php

require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Computer.php';

class Car
{
    private int $seatsNumber;

    private Engine $engine;

    private Computer $computer;

    /**
     * @param int $seatsNumber
     */
    public function setSeatsNumber(int $seatsNumber): void
    {
        $this->seatsNumber = $seatsNumber;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @param Computer $computer
     */
    public function setComputer(Computer $computer): void
    {
        $this->computer = $computer;
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }
}
