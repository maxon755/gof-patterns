<?php

interface Order
{
    public function getPrice(): int;

    public function getInfo(): string;
}
