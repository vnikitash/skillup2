<?php

$db = new mysqli('127.0.0.1', 'root', '', 'test');

$res = $db->query("SELECT * FROM users");
$users = $res->fetch_assoc();

print_r($users);