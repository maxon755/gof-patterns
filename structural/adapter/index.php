<?php

require_once __DIR__ . '/Adapter.php';
require_once __DIR__ . '/ForeignLibraryWorker.php';
require_once __DIR__ . '/OwnProjectWorker.php';

function clientCode(OwnProjectWorker $worker)
{
    var_dump($worker->performAction());
}

$ownWorker = new Adapter(
    new ForeignLibraryWorker()
);

clientCode($ownWorker);
