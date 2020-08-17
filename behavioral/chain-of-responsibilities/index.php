<?php

require_once __DIR__ . '/Request.php';
require_once __DIR__ . '/AuthMiddleware.php';
require_once __DIR__ . '/AuthorizeMiddleware.php';

$request = buildRequest($argv);

$chain = buildChain();

$chain->handle($request);

echo 'Request successfully transferred to main part of application' . PHP_EOL;

function buildChain(): MiddleWare
{
    $chain = new AuthMiddleware();

    $chain->setNext(new AuthorizeMiddleware());

    return $chain;
}

function buildRequest(array $argv)
{
    $user = $argv[1];
    $password = $argv[2];
    $endpoint = $argv[3];

    return new Request(
        $user,
        $password,
        $endpoint
    );
}
