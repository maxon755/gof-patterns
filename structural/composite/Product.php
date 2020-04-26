<?php

require_once __DIR__ . '/Order.php';

class Product implements Order
{
    private int $price;

    private string $name;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return $this->name . ': ' . $this->price . '$';
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
