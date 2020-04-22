<?php

require_once __DIR__ . '/Builder.php';
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/TurboEngine.php';

class CarBuilder implements Builder
{
    private Car $car;

    public function reset(): void
    {
        $this->car = new Car();
    }

    public function setSeats(int $seatsNumber): void
    {
        $this->car->setSeatsNumber($seatsNumber);
    }

    public function setEngine(Engine $engine): void
    {
        $this->car->setEngine($engine);
    }

    public function setTripComputer(Computer $computer): void
    {
        $this->car->setComputer($computer);
    }

    public function getResult()
    {
        return $this->car;
    }
}
