<?php

abstract class Button
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    abstract public function render(): string;
}
