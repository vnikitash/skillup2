<?php


class User
{
    public function findUser()
    {

    }

    public function updateUser()
    {

    }
}

class Session
{
    public function start()
    {

    }
}

class Register
{
    private $user;
    private $session;

    public function __construct()
    {
        $this->user = new User();
        $this->session = new Session();
    }

    public function register()
    {
        $this->user->findUser();
        $this->session->start();
    }


}

class Login
{
    private $user;
    private $session;

    public function __construct()
    {
        $this->user = new User();
        $this->session = new Session();
    }

    public function login()
    {
        $this->user->findUser();
        $this->session->start();
    }
}

$login = new Login();
$login->login();