<?php

require_once __DIR__ . '/Order.php';

class Box implements Order
{
    private SplObjectStorage $content;

    public function __construct()
    {
        $this->content = new SplObjectStorage();
    }

    public function getInfo(): string
    {
        $delimiter = '<***************>';

        $ordersInfo = array_reduce(iterator_to_array($this->content),
            function (string $info, Order $order) {
                return $info . $order->getInfo() . PHP_EOL;
            }, '');

        return $delimiter . PHP_EOL . $ordersInfo . $delimiter . PHP_EOL;
    }

    public function getPrice(): int
    {
        $boxPrice = $this->content->count();

        $ordersPrice = array_reduce(iterator_to_array($this->content),
            function (int $total, Order $order) {
                return $total + $order->getPrice();
            }, 0);

        return $boxPrice + $ordersPrice;
    }

    public function put(Order $order)
    {
        $this->content->attach($order);
    }
}
