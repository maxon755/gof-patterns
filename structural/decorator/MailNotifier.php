<?php

require_once __DIR__ . '/Notifier.php';

class MailNotifier implements Notifier
{
    public function notify()
    {
        echo 'Mail notification' . PHP_EOL;
    }
}
