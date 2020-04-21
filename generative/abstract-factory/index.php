<?php

require_once  __DIR__ . '/DrumSet.php';
require_once __DIR__ . '/AcousticDrumFactory.php';
require_once __DIR__ . '/ElectricDrumFactory.php';

switch ($argv[1]) {
    case 'acoustic':
        $factory = new AcousticDrumFactory();
        break;
    case 'electric':
        $factory = new ElectricDrumFactory();
        break;
    default:
        $factory = new AcousticDrumFactory();
}

$drumSet = new DrumSet(
    $factory->createBaseDrum(),
    $factory->createSnareDrum()
);

$drumSet->showInfo();
