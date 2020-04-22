<?php

require_once __DIR__ . '/Builder.php';
require_once __DIR__ . '/TurboEngine.php';
require_once __DIR__ . '/DieselEngine.php';
require_once __DIR__ . '/TripComputer.php';

class Director
{
    public function buildSportCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new TurboEngine());
        $builder->setTripComputer(new TripComputer());
    }

    public function buildCityCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(5);
        $builder->setEngine(new DieselEngine());
    }
}
