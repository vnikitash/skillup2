<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $db = new mysqli("db", 'root', '', 'test');

    $res = $db->query("SELECT * FROM users LEFT JOIN orders ON orders.user_id = users.id;");
    $result = $res->fetch_all(MYSQLI_ASSOC);

    print_r($result);

} catch (Exception $e) {
    die($e->getMessage());
}
