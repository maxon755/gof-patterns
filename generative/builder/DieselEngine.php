<?php

require_once __DIR__ . '/Engine.php';

class DieselEngine implements Engine
{

    public function getInfo(): string
    {
        return "Common diesel engine";
    }
}
