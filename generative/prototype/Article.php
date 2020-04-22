<?php

require_once __DIR__ . '/Author.php';

class Article
{
    private string $title;

    private string $body;

    private Author $author;

    private array $comments;

    private DateTime $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;

        $this->author->addArticle($this);

        $this->date = new DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = 'Copy of ' . $this->title;
        $this->author->addArticle($this);
        $this->comments = [];
        $this->date = new DateTime();
    }
}
