<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserAgeOrderedIterator.php';
require_once __DIR__ . '/UserNameOrderedIterator.php';

class UserCollection implements IteratorAggregate
{
    private array $items;

    public function __construct(array $items = [])
    {
        $this->checkItems($items);
        $this->items = $items;
    }

    private function checkItems(array $items): void
    {
        foreach ($items as $item) {
            if (!$item instanceof User) {
                throw new Exception('The item should be ' . User::class);
            }
        }
    }

    public function append(User $user): void
    {
        $this->items[] = $user;
    }

    public function getAgeOrderedIterator()
    {
        return new UserAgeOrderedIterator($this->items);
    }

    public function getNameOrderedIterator()
    {
        return new UserNameOrderedIterator($this->items);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}
