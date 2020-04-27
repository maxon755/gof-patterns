<?php

require_once __DIR__ . '/NotifierDecorator.php';

class SlackNotifier extends NotifierDecorator
{
    public function notify()
    {
        echo 'Slack Notification' . PHP_EOL;
        parent::notify();
    }
}
