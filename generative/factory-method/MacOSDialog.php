<?php

include_once __DIR__ . '/Dialog.php';
include_once __DIR__ . '/MacOSButton.php';


class MacOSDialog extends Dialog
{
    protected function createButton(string $title): Button
    {
        return new MacOSButton($title);
    }
}
