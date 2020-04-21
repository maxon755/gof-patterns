<?php

require_once __DIR__ . '/DrumFactory.php';
require_once __DIR__ . '/ElectricBaseDrum.php';
require_once __DIR__ . '/ElectricSnareDrum.php';

class ElectricDrumFactory implements DrumFactory
{
    public function createBaseDrum(): BaseDrum
    {
        return new ElectricBaseDrum();
    }

    public function createSnareDrum(): SnareDrum
    {
        return new ElectricSnareDrum();
    }
}
