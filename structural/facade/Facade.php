<?php

require_once __DIR__ . '/SubSystemObject1.php';
require_once __DIR__ . '/SubSystemObject2.php';

class Facade
{
    private ?SubSystemObject1 $subSystemObject1;
    private ?SubSystemObject2 $subSystemObject2;

    public function __construct(
        ?SubSystemObject1 $subSystemObject1 = null,
        ?SubSystemObject2 $subSystemObject2 = null
    ) {
        $this->subSystemObject1 = $subSystemObject1 ?? new SubSystemObject1();
        $this->subSystemObject2 = $subSystemObject2 ?? new SubSystemObject2();
    }

    public function do()
    {
        $this->subSystemObject1->do();
        $this->subSystemObject2->do();
    }
}
