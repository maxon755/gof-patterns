<?php

require_once __DIR__ . '/Notifier.php';

abstract class NotifierDecorator implements Notifier
{
    private Notifier $wrapee;

    public function __construct(Notifier $wrapee)
    {
        $this->wrapee = $wrapee;
    }

    public function notify()
    {
        $this->wrapee->notify();
    }
}
