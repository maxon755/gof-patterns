<?php

require_once __DIR__ . '/User.php';

class UserAgeOrderedIterator extends ArrayIterator
{
    public function __construct($array = [], $flags = 0)
    {
        usort($array, function (User $a, User $b) {
            return $a->getAge() <=> $b->getAge();
        });

        parent::__construct($array, $flags);
    }

    /**
     * @return User
     */
    public function current()
    {
        return parent::current();
    }
}
