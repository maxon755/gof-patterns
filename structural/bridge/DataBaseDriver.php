<?php

/**
 * Interface DataBaseDriver
 *
 * Bridge implementation
 */
interface DataBaseDriver
{
    public function getConnection();

    public function executeQuery(string $query);
}
