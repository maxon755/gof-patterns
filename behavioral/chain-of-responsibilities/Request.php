<?php

class Request
{
    private string $login;
    private string $password;
    private string $endpoint;

    public function __construct(string $login, string $password, string $endpoint)
    {
        $this->login = $login;
        $this->password = $password;
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

}
