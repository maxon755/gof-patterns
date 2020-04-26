<?php

require_once __DIR__ . '/Box.php';
require_once __DIR__ . '/Product.php';


$mainBox = new Box();

$smartPhoneBox = new Box();
$smartPhone = new Product('Smart Phone', 800);
$manual = new Product('User Manual', 20);
$smartPhoneBox->put($smartPhone);
$smartPhoneBox->put($manual);
$mainBox->put($smartPhoneBox);

$chargeBox = new Box();
$charge = new Product('Charge', 70);
$chargeBox->put($charge);

$mainBox->put($chargeBox);

$orderInfo = new Product('Order Info', 0);
$mainBox->put($orderInfo);

echo $mainBox->getInfo();
echo "Total: " . $mainBox->getPrice() . '$' . PHP_EOL;
