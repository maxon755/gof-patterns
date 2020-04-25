<?php

declare(strict_types=1);

require_once __DIR__ . '/OwnProjectWorker.php';
require_once __DIR__ . '/ForeignLibraryWorker.php';

class Adapter implements OwnProjectWorker
{
    private ForeignLibraryWorker $worker;

    public function __construct(ForeignLibraryWorker $worker)
    {
        $this->worker = $worker;
    }

    public function performAction(): string
    {
       return (string)$this->worker->performActionInStrangeWay();
    }
}
