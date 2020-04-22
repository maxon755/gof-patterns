<?php

require_once __DIR__ . '/Engine.php';

class TurboEngine implements Engine
{

    public function getInfo(): string
    {
        return "V-type turbo engine";
    }
}
