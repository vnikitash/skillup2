<?php

header("Content-Type: text/html; charset=utf-8");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "session.php";
require_once "functions.php";
require_once "libs/Smarty.class.php";


$smarty = new Smarty();
$smarty->setTemplateDir('templates');

$uri = explode("?", ltrim($_SERVER['REQUEST_URI'], "/"))[0];
$parts = explode("/", $uri);
$action = array_shift($parts) ?? 'products';

$smarty->assign('cart_count', getCartCount());

switch ($action) {
    case "login":
        processLoginRequest();
        break;
    case "register":
        processRegisterRequest();
        break;
    case "admin":
        $adminEntity = array_shift($parts) ?? 'products';
        $adminAction = array_shift($parts);
        processAdminRequest($adminEntity, $adminAction);
        break;
    case "orders":
        processOrdersRequest();
        break;
    case "session":
        print_r($_SESSION);
        break;
    case "logout":
        processLogoutRequest();
        break;
    case 'cart':
        $cartAction = array_shift($parts) ?? 'list';
        processCartRequest($cartAction);
        break;
    case "products":
        processProductsRequest();
        break;
    default:
        redirectToMain();

}