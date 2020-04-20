<?php

class LinuxButton extends Button
{

    public function render(): string
    {
        return <<<Button
~~~~~~~~~~~~~~~~~
   $this->title (linux)
~~~~~~~~~~~~~~~~~
Button;
    }
}
