<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserCollection.php';

$userCollection = new UserCollection();

$userCollection->append(new User('Bob', 27));
$userCollection->append(new User('July', 23));
$userCollection->append(new User('Alice', 25));

echo 'ArrayIterator' . PHP_EOL;
foreach ($userCollection as $user) {
    echo 'Name: ' . $user->getName() . PHP_EOL;
    echo 'Age: ' . $user->getAge() . PHP_EOL . PHP_EOL;
}

echo 'Ordered by Age' . PHP_EOL;
foreach ($userCollection->getAgeOrderedIterator() as $user) {
    echo 'Name: ' . $user->getName() . PHP_EOL;
    echo 'Age: ' . $user->getAge() . PHP_EOL . PHP_EOL;
}

echo 'Ordered by Name' . PHP_EOL;
foreach ($userCollection->getNameOrderedIterator() as $user) {
    echo 'Name: ' . $user->getName() . PHP_EOL;
    echo 'Age: ' . $user->getAge() . PHP_EOL . PHP_EOL;
}



