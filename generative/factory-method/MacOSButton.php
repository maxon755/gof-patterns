<?php

class MacOSButton extends Button
{
    public function render(): string
    {
       return <<<Button
*-----------------*
    $this->title (macos)
*-----------------*
Button;
    }
}
