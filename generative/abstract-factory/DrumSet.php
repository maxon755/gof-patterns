<?php

require_once __DIR__ . '/BaseDrum.php';
require_once __DIR__ . '/SnareDrum.php';

class DrumSet
{
    private BaseDrum $baseDrum;
    private SnareDrum $snareDrum;

    public function __construct(BaseDrum $baseDrum, SnareDrum $snareDrum)
    {
        $this->baseDrum = $baseDrum;
        $this->snareDrum = $snareDrum;
    }

    public function showInfo()
    {
        echo (new ReflectionClass($this->baseDrum))->getShortName();
        echo PHP_EOL;
        echo (new ReflectionClass($this->snareDrum))->getShortName();
        echo PHP_EOL;
    }
}
