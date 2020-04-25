<?php

require_once __DIR__ . '/DataBasePlatform.php';
require_once __DIR__ . '/DataBaseDriver.php';

/**
 * Class DataBase
 *
 * Bridge abstraction
 */
class DataBase
{
    private DataBaseDriver $driver;
    private DataBasePlatform $platform;

    public function __construct(DataBaseDriver $driver, DataBasePlatform $platform)
    {
        $this->driver = $driver;
        $this->platform = $platform;
    }

    public function executeQuery(string $query)
    {
        $this->driver->executeQuery($query);
    }

    public function createUuidColumn(string $tableName, string $columnName)
    {
        $uuidType = $this->platform->getUuidColumn();

        $this->driver->executeQuery(
            "ALTER TABLE {$tableName} ADD COLUMN {$columnName} {$uuidType};"
        );
    }
}
