<?php

require_once "session.php";
require_once "functions.php";

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case "login":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo getLoginView();
        } else {
            $login = $_POST['login'];
            $password = $_POST['password'];
            loginUser($login, $password);
        }
        break;
    case "register":
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo getRegisterView();
        } else {
            $login = $_POST['login'];
            $password = $_POST['password'];
            createUser($login, $password);
            echo "I WILL TRY TO REGISTER USER";
        }
        break;
    case 'session':
        print_r($_SESSION);
        break;
    case "logout":
        session_destroy();
        header("Location: /");
        break;
    case "index":
    default:
        echo getMainPageView();
}



//$pdf = file_get_contents("http://www.africau.edu/images/default/sample.pdf");


//header("Content-type: image/jpeg");
//header('Content-Disposition: attachment; filename="downloaded.pdf"');

///echo $pdf;