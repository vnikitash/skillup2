<?php

require_once "functions.php";
require_once "libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->setTemplateDir('templates');



$action = ltrim($_SERVER['REQUEST_URI'], '/') ?? 'index';

switch ($action) {
    case "login":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            getLoginView();
        } else {
            echo "I will login user!";
        }

        break;
    case "register":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            getRegisterView();
        } else {
            echo "I will register user!";
        }
        break;
    default:
        getDeafaultPage();
}





