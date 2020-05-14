<?php

require_once __DIR__ . '/Downloader.php';
require_once __DIR__ . '/SimpleDownloader.php';
require_once __DIR__ . '/CachingDownloader.php';

function clientCode(Downloader $subject)
{
    $subject->download("http://example.com/");

    $subject->download("http://example.com/");
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader;
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);
