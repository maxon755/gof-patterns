<?php

require_once __DIR__ . '/BaseDrum.php';
require_once __DIR__ . '/SnareDrum.php';

interface DrumFactory
{
    public function createBaseDrum(): BaseDrum;

    public function createSnareDrum(): SnareDrum;
}
