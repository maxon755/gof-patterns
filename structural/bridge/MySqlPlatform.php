<?php

require_once __DIR__ . '/DataBasePlatform.php';


class MySqlPlatform implements DataBasePlatform
{
    public function getName(): string
    {
       return 'mysql';
    }

    public function getUuidColumn(): string
    {
        return 'char(36)';
    }

    public function getMaxColumnNumber(): int
    {
        return 100;
    }
}
