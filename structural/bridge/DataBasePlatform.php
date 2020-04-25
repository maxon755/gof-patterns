<?php

/**
 * Interface DataBasePlatform
 *
 * Bridge Implementation
 */
interface DataBasePlatform
{
    public function getName(): string;

    public function getUuidColumn(): string;

    public function getMaxColumnNumber(): int;
}
