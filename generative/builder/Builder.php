<?php

require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Computer.php';

interface Builder
{
    public function reset(): void;

    public function setSeats(int $seatsNumber): void;

    public function setEngine(Engine $engine): void;

    public function setTripComputer(Computer $computer): void;

    public function getResult();
}
