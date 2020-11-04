<?php

require_once __DIR__ . '/Mediator.php';
require_once __DIR__ . '/UI.php';
require_once __DIR__ . '/Repository.php';

class App implements Mediator
{
    private UI $ui;
    private Repository $repository;

    public function __construct(UI $ui, Repository $repository)
    {
        $this->ui = $ui;
        $this->repository = $repository;

        $this->ui->setMediator($this);
        $this->repository->setMediator($this);
    }

    public function getUser(string $username): string
    {
        return $this->repository->getUserName($username);
    }

    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }
}
