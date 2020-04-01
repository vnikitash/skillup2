<?php

const USERS_FILE = "users.json";

if (isset($_COOKIE['session_id'])) {
    session_id($_COOKIE['session_id']);
    session_start();
} else {
    session_start();
    setcookie('session_id', session_id(), time() + 14*24*60*60);
    unset($_SESSION['data']);
}

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case "login":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            getLoginView();
        } else {
            loginUser();
        }
        break;
    case "logout":
        session_destroy();
        header("Location: /");
        break;
    case "register":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            getRegisterView();
        } else {
            registerUser();
        }
        break;
    case "index":
        index();
        break;
}

function getLoginView()
{
    echo "<form action='/?action=login' method='POST'>

        <input type='text' name='name'>
        <input type='password' name='pass'>
        <input type='submit'></form>";
}

function getRegisterView()
{
    echo "<form action='/?action=register' method='POST'>

        <input type='text' name='name'>
        <input type='password' name='pass'>
        <input type='submit'></form>";
}

function registerUser()
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    createUser($name, $pass);
    $_SESSION['data']['user'] = $name;
    header("Location: /");

}

function loginUser()
{
    $users = getUserList();

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    foreach ($users as $user) {
        if ($user['name'] === $name && $user['pass'] === $pass) {
            $_SESSION['data']['user'] = $name;
            header("Location: /");
            die();
        }
    }

    die("Wrong credentials");
}

function index() {
    $isAuth = isset($_SESSION['data']['user']);

    if (!$isAuth) {
        echo "You are unauthorized <a href='/?action=login'>Login</a><a href='/?action=register'>Register</a>";
        die();
    }

    echo "Welcome, " . $_SESSION['data']['user'] . " <a href='/?action=logout'>Logout</a>";
}

function createUser(string $name, string $password): void
{
    $users = getUserList();
    $users[] = [
        'name' => $name,
        'pass' => $password,
    ];

    file_put_contents(USERS_FILE, json_encode($users));
}

function getUserList(): array
{
    if (!file_exists(USERS_FILE)) {
        return [];
    }

    $str = file_get_contents(USERS_FILE);

    return json_decode($str, true) ?? [];
}

