<?php

ini_set('assert.exception', 1);

include __DIR__ . '/Singleton.php';

assert(spl_object_id(Singleton::getInstance()) === spl_object_id(Singleton::getInstance()));

echo  'Object Id: ' . spl_object_id(Singleton::getInstance()) . PHP_EOL;
