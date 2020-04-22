<?php

require_once __DIR__ . '/Author.php';
require_once __DIR__ . '/Article.php';

$author = new Author('Maks Rogers');

$article = new Article('Sensation!', 'Something very interesting happened', $author);

$article->addComment('Great!');

print_r($article);

$copy = clone $article;

print_r($copy);

var_dump(count($author->getArticles()));
