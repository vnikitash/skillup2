<?php

$db = null;

const DEFAULT_PAGE = 1;
const DEFAULT_PER_PAGE = 9;


function getDBConnection(): mysqli
{
    global $db;

    return $db ?? $db = new mysqli('db', 'root', '', 'test');
}

function getProducts(int $page = 1, int $perPage = 9, ?int $categoryId = null): array
{
    $db = getDBConnection();

    $skip = ($page - 1) * $perPage; // page 1 => skip = 0 //page 2 => skip 9 // page 3 => skip 18



    $query = "SELECT * FROM `products` ";

    if ($categoryId) {
        $query .= ' WHERE category_id = '. $categoryId;
    }

    $query .= " LIMIT $skip, $perPage";

    $res = $db->query($query);
    $products = $res->fetch_all(MYSQLI_ASSOC);

    return $products;
}

function getProductsCount(?int $categoryId = null): int
{
    $db = getDBConnection();

    $query = "SELECT COUNT(*) as c FROM products";

    if ($categoryId) {
        $query .= " WHERE category_id = $categoryId";
    }

    $res = $db->query($query);
    return (int) $res->fetch_all()[0][0];
}

function getCategories(): array
{
    $db = getDBConnection();
    $res = $db->query("SELECT * FROM categories ORDER BY `order` DESC");

    return $res->fetch_all(MYSQLI_ASSOC);
}

function createUser(string $email, string $password): array
{
    $user = findUserByEmail($email);

    if ($user) {
        header("Location: /register?error=USER ALREADY EXISTS");
        die();
    }

    $db = getDBConnection();
    $pass = md5($password);
    $db->query("INSERT INTO users SET `email`='$email', `pass`='$pass'");

    $_SESSION['user'] = findUserByEmail($email);
    redirectToMain();
}

function findUserByEmail(string $email): array
{
    $query = "SELECT * FROM users WHERE `email` = '$email' LIMIT 1";
    $db = getDBConnection();
    $res = $db->query($query);

    return $res->num_rows === 0 ? [] : $res->fetch_assoc();
}

function login(string $email, string $password)
{
    $user = findUserByEmail($email);

    if (!$user) {
        header("Location: /login?error=User does not exist or credentials are incorrect");
        die();
    }

    if ($user['pass'] !== md5($password)) {
        header("Location: /login?error=User does not exist or credentials are incorrect");
        die();
    }

    $_SESSION['user'] = findUserByEmail($email);
    redirectToMain();
}


/**
 * $res->fetch_all(MYSQLI_RESULT);
 *
 * vs
 *
 * $res->fetch_assoc();
 *
 * Array
 * (
 *      [0] => Array
 *      (
 *          [id] => 1
 *          [email] => viktor@gmail.com
 *          [pass] =>
 *          [created_at] => 2020-04-17 17:47:10
 *          [is_admin] => 1
 *      )
 * )
 *
 * vs
 *
 *Array
 * (
 *      [id] => 1
 *      [email] => viktor@gmail.com
 *      [pass] =>
 *      [created_at] => 2020-04-17 17:47:10
 *      [is_admin] => 1
 * )
 *
 */





function processLoginRequest() {

    if (isset($_SESSION['user'])) {
        redirectToMain();
    }

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method === 'GET') {
        getLoginView();
    } else if ($method === 'POST') {
        $email = htmlspecialchars($_POST['email'] ?? '');
        $password = htmlspecialchars($_POST['password'] ?? '');
        if (empty($email) || empty($password)) {
            die("Email and pass should be");
        }
        login($email, $password);
    } else {
        die("Unsupported method");
    }
}

function processRegisterRequest() {

    if (isset($_SESSION['user'])) {
        redirectToMain();
    }

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method === 'GET') {
        getRegisterView();
    } else if ($method === 'POST') {
        $email = htmlspecialchars($_POST['email'] ?? '');
        $password = htmlspecialchars($_POST['password'] ?? '');
        if (empty($email) || empty($password)) {
            die("Email and pass should be");
        }
        createUser($email, $password);
    } else {
        die("Unsupported method");
    }
}

function processLogoutRequest()
{
    unset($_SESSION['user']);
    redirectToMain();
}

function processAdminRequest()
{
    $isAdmin = $_SESSION['user']['is_admin'] ?? 0;

    if (!$isAdmin) {
        redirectToMain();
    }

    die("Welcome ADMIN!");
}

function processOrdersRequest() {
    die("orders");
}

function processProductsRequest()
{
    global $smarty;

    $page = $_GET['page'] ?? DEFAULT_PAGE;
    $perPage = $_GET['perPage'] ?? DEFAULT_PER_PAGE;
    $categoryId = $_GET['category_id'] ?? null;

    $products = getProducts($page, $perPage, $categoryId);

    $smarty->assign('products', $products);
    $smarty->assign('count', getProductsCount($categoryId));
    $smarty->assign('page', $page);
    $smarty->assign('perPage', $perPage);
    $smarty->assign('categories', getCategories());
    $smarty->display('index.tpl');

}

function getLoginView()
{
    global $smarty;

    $smarty->assign('type', 'Login');
    $smarty->assign('action', 'login');
    $smarty->display('form.tpl');
}

function getRegisterView()
{
    global $smarty;

    $smarty->assign('type', 'Register');
    $smarty->assign('action', 'register');
    $smarty->display('form.tpl');
}

function redirectToMain()
{
    header("Location: /products");
    die();
}

