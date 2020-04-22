<?php

require_once __DIR__ . '/Article.php';

class Author
{
    private string $name;

    private array $articles;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addArticle(Article $articles): void
    {
        $this->articles[] = $articles;
    }

    public function getArticles()
    {
        return $this->articles;
    }
}
