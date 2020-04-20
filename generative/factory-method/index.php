<?php

include __DIR__ . '/LinuxDialog.php';
include __DIR__ . '/MacOSDialog.php';

switch ($argv[1]) {
    case 'linux':
        $dialog = new LinuxDialog();
        break;
    case 'macos':
        $dialog = new MacOSDialog();
        break;
    default:
        $dialog = new LinuxDialog();
}

$dialog->render();
