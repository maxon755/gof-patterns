<?php

require_once __DIR__ . '/App.php';
require_once __DIR__ . '/UI.php';
require_once __DIR__ . '/Repository.php';

$repository = new Repository();
$ui = new UI();

$app = new App($ui, $repository);

$app->printInfoAbout('Dominik');
