<?php

require_once __DIR__ . '/DataBase.php';
require_once __DIR__ . '/MySqlDriver.php';
require_once __DIR__ . '/MySqlPlatform.php';

$db = new DataBase(
    new MySqlDriver(),
    new MySqlPlatform()
);
