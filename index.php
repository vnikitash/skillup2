<?php

require_once "libs/Smarty.class.php";
require_once "functions.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case "create":

        print_r($_POST['test']);
        die();

        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        if ($login && $password) {
            createUser($login, $password);
        }
        header('Location: /');
        break;
    case "delete":
        if (!isset($_POST['id'])) {
            die("We do not know which user we should remove");
        }

        removeUser($_POST['id']);
        header('Location: /');
        break;
    case "index":
        showMain();
}