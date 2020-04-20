<?php

include_once __DIR__ . '/Button.php';

abstract class Dialog
{
    /**
     * Factory method
     *
     * @param string $title
     * @return Button
     */
    abstract protected function createButton(string $title): Button;

    public function render(): void
    {
        echo $this->createButton('OK')->render();
        echo PHP_EOL;
        echo PHP_EOL;
        echo $this->createButton('Cancel')->render();
        echo PHP_EOL;
    }
}
