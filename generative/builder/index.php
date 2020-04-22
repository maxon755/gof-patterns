<?php

require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/CarBuilder.php';

$builder = new CarBuilder();
$director = new Director();

$director->buildSportCar($builder);
$sportCar = $builder->getResult();

echo get_class($sportCar) . PHP_EOL;
echo $sportCar->getEngine()->getInfo() . PHP_EOL;

$director->buildCityCar($builder);
$cityCar = $builder->getResult();

echo get_class($cityCar) . PHP_EOL;
echo $cityCar->getEngine()->getInfo() . PHP_EOL;
