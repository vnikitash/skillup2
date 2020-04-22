<?php

$db = new mysqli("db", 'root', '', 'test');

$categories = $db->query("SELECT * FROM categories")
    ->fetch_all(MYSQLI_ASSOC);

$ids = array_map(function ($category) {
    return $category['id'];
}, $categories);


$products = [];


foreach ($ids as $categoryId) {
    for ($i = 1; $i <= 10000; $i++) {
        $products[] = [
            'name' => 'Product ' . $categoryId . '_' . $i,
            'price' => rand(100,100000)/100,
            'category_id' => $categoryId
        ];
    }
}

$query = "INSERT INTO products (`name`, `price`, `category_id`) VALUES (";

$str = [];

foreach ($products as $product) {
    $str[] = "'{$product['name']}', {$product['price']}, {$product['category_id']}";
}

$query .= implode("),(", $str);
$query .= ")";

$db->query($query);