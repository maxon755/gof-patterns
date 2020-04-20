<?php

include __DIR__ . '/Dialog.php';
include __DIR__ . '/LinuxButton.php';

class LinuxDialog extends Dialog
{
    protected function createButton(string $title): Button
    {
        return new LinuxButton($title);
    }
}
