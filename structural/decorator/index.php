<?php

require_once __DIR__ . '/MailNotifier.php';
require_once __DIR__ . '/SlackNotifier.php';
require_once __DIR__ . '/BirdNotifier.php';

$notifier = new MailNotifier();
$notifier = new SlackNotifier($notifier);
$notifier = new BirdNotifier($notifier);

$notifier->notify();
