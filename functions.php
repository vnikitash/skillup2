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

    checkSecureEmail($email);

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
        $email = $_POST['email'] ?? '';
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
        $email = htmlspecialchars($_POST['email']) ?? '';
        $password = htmlspecialchars($_POST['password'] ?? '');
        if (empty($email) || empty($password)) {
            die("Email and pass should be");
        }
        createUser($email, $password);
    } else {
        die("Unsupported method");
    }
}


function processCartRequest(?string $action)
{
    switch ($action) {
        case "add":
            if (!isset($_POST['product_id']) || !is_numeric($_POST['product_id'])) {
                redirectToMain(['error' => 'Product ID is incorrect']);
                die();
            }

            $productId = (int) $_POST['product_id'];

            addToCart($productId);

            redirectToMain();
            break;
        case 'inc':
            break;
        case 'dec':
            break;
        case 'delete':
            break;
        case 'list':
        default:
            getCartView();
            break;
    }
}


function addToCart(int $productId) {
    $db = getDBConnection();

    $res = $db->query("SELECT * FROM products WHERE id = $productId LIMIT 1");

    if ($res->num_rows === 0) {
        redirectToMain(['error' => "Item with ID: $productId does not exist"]);
        die();
    }

    $product = $res->fetch_assoc();

    if (isset($_SESSION['cart'][$product['id']])) {
        $_SESSION['cart'][$product['id']]['count'] += 1;
    } else {
        $product['count'] = 1;
        $_SESSION['cart'][$product['id']] = $product;
    }

    redirectToMain();
}

function processLogoutRequest()
{
    unset($_SESSION['user']);
    redirectToMain();
}

function processAdminRequest(string $adminEntity, ?string $adminAction = null)
{
    $isAdmin = $_SESSION['user']['is_admin'] ?? 0;

    if (!$isAdmin) {
        redirectToMain();
    }

    $adminAction = $adminAction ?? 'categories';

    switch ($adminEntity) {
        case "categories":
            adminCategories($adminAction);
            break;
        case "products":
            adminProducts($adminAction);
            break;
        case "orders":
            adminOrders($adminAction);
            break;
        case "users":
            adminUsers($adminAction);
            break;
    }
}

function adminCategories($action)
{
    switch ($action) {
        case "create":
            break;
        case "update":
            break;
        case "delete":
            break;
        case "list":
        default:
            getAdminCategoriesView();
            break;
    }
}

function adminProducts($action)
{
    switch ($action) {
        case "create":
            break;
        case "update":
            break;
        case "delete":
            break;
        case "list":
        default:
            getAdminProductsView();
            break;
    }
}

function adminOrders($action)
{
    switch ($action) {
        case "create":
            break;
        case "update":
            break;
        case "delete":
            break;
        case "list":
        default:
            getAdminOrdersView();
            break;
    }
}

function adminUsers($action)
{
    switch ($action) {
        case "create":
            break;
        case "update":
            if (!isset($_POST['email']) || !isset($_POST['user_id']) || $_POST['user_id'] == $_SESSION['user']['id']) {
                die("error");
            }

            $isAdmin = (int) isset($_POST['admin']);
            $userId = (int) $_POST['user_id'];
            updateUser($userId, $_POST['email'], $isAdmin);
            break;
        case "delete":
            break;
        case "list":
        default:
            getAdminUsersView();
            break;
    }
}

function updateUser(int $userId, string $email, int $isAdmin)
{
    $db = getDBConnection();




    $query = "UPDATE users SET `email` = '$email', `is_admin` = $isAdmin WHERE id = $userId";

    $db->query($query);
    header("Location: /admin/users");
    die();
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

function getCartView()
{
    global $smarty;
    $total = 0;

    foreach ($_SESSION['cart'] ?? [] as $product) {
        $total += $product['count'] * $product['price'];
    }

    $smarty->assign('cartItems', $_SESSION['cart'] ?? []);
    $smarty->assign('total', $total);
    $smarty->display('cart.tpl');
}

function getAdminCategoriesView()
{
    global $smarty;

    $smarty->display('admin/categories.tpl');
}

function getAdminProductsView()
{
    global $smarty;

    $smarty->display('admin/products.tpl');
}

function getAdminUsersView()
{


    $query = "
    SELECT 
	users.id, 
	users.email, 
	DATE_FORMAT(users.created_at, '%d.%m.%Y') as created_at,
	users.is_admin,
	COUNT(orders.id) as orders_count
FROM users 
	LEFT JOIN orders 
		ON orders.user_id = users.id 
GROUP BY users.id
    ";

    $db = getDBConnection();
    $res = $db->query($query);

    global $smarty;

    $smarty->assign('users', $res->num_rows === 0 ? [] : $res->fetch_all(MYSQLI_ASSOC));
    $smarty->display('admin/users.tpl');
}

function getAdminOrdersView()
{
    global $smarty;

    $smarty->display('admin/orders.tpl');
}

function redirectToMain(?array $getParams = [])
{
    $url = '/products';
    if ($getParams) {
        $url .= '?';
    }
    header("Location: $url" . http_build_query($getParams));
    die();
}

function getCartCount()
{
    $count = 0;
    foreach ($_SESSION['cart'] ?? [] as $product)
    {
        $count += $product['count'];
    }

    return $count;
}

function checkSecureEmail($email)
{
    return true;
    $abc = array_merge(range("a", "z"), range('A', 'Z'), range(0,9));
    $abc[] = "@";
    $abc[] = "!";
    $abc[] = ".";
    $abc[] = "-";
    $tmp = implode("", $abc);

    foreach (str_split($email) as $letter) {
        if (strpos($tmp, $letter) === false) {
            die(":(");
        }
    }
}

