<?php

declare(strict_types=1);

interface Mediator
{
    public function getUser(string $username): string;
}
