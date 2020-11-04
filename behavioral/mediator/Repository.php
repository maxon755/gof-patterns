<?php

require_once __DIR__ . '/Colleague.php';

class Repository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}
