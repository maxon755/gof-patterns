<?php

require_once __DIR__ . '/NotifierDecorator.php';

class BirdNotifier extends NotifierDecorator
{
    public function notify()
    {
        echo "Bird notification" . PHP_EOL;
        parent::notify();
    }
}
