<?php

require_once __DIR__ . '/Colleague.php';

class UI extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}
