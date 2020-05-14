<?php

require_once __DIR__ . '/Downloader.php';
require_once __DIR__ . '/SimpleDownloader.php';

class CachingDownloader implements Downloader
{
    private SimpleDownloader $downloader;

    /**
     * @var string[]
     */
    private array $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}
