<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "libs/Smarty.class.php";

spl_autoload_register(function ($className) {
    if (strpos($className, "Model") !== false) {
        if (file_exists("Models/$className.php")) {
            require_once "Models/$className.php";
            return;
        }
    }

    if (strpos($className, "Controller") !== false) {
        if (file_exists("Controllers/$className.php")) {
            require_once "Controllers/$className.php";
            return;
        }
    }

    if (file_exists("Helpers/$className.php")) {
        require_once "Helpers/$className.php";
        return;
    }

    die("404 not found");
});

$user = new UserModel();

$session = new Session();
$smarty = new Smarty();
$smarty->setTemplateDir("Views");

$url = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));
$controller = ucfirst(array_shift($url) ?? "user") . "Controller";
$method = array_shift($url) ?? 'index';

$controller = new $controller();

if (!method_exists($controller, $method)) {
    die("404 not found!");
}

$controller->$method();