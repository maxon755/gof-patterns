<?php

require_once __DIR__ . '/DrumFactory.php';
require_once __DIR__ . '/AcousticBaseDrum.php';
require_once __DIR__ . '/AcousticSnareDrum.php';

class AcousticDrumFactory implements DrumFactory
{

    public function createBaseDrum(): BaseDrum
    {
        return new AcousticBaseDrum();
    }

    public function createSnareDrum(): SnareDrum
    {
       return new AcousticSnareDrum();
    }
}
