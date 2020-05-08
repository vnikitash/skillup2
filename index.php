<?php
require_once "User.php";
require_once "DB.php";




$user = new User();
$product = new Product();





$user = User::findUserByEmail("admin@admin.admin");
$user->setPass("newpass")
    ->setEmail("newpass")
    ->setAdmin(false)
    ->save();

/**
 *
 * $flight = App\Flight::find(1);
 * $flight->name = 'New Flight Name';
 * $flight->save();
 */








$user = new User();
$user->setEmail("test");
$user->save();




$email = "o@o.o";
$user = User::findUserByEmail($email);

if (!$user) {
    die("User not found");
}

$user->delete();
die("User with email $email has been successfully removed");


















/**
$user1 = User::findUserByEmail("user+98@gmail.com");
$user2 = User::findUserByEmail("user+97@gmail.com");
$user3 = User::findUserByEmail("user+96@gmail.com");



//---------------------
$u1 = new User();
$u1->setEmail("asdasd@a.a");
$u1->setPass('asdasdasd');
$u1 = $u1->fillObjectByMysqlResultSearchViaEmail("user+98@gmail.com");


**/







































/*
S - Signle responsibility -



O - open closed princliple
L - Liskov substitution
I - interface segragation
D - Dependency Inversion
*/