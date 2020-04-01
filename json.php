<?php
const USERS_FILE = 'u.json';

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    print_r(getUserList());
} else {
    $name = $_POST['name'] ?? "Unknown";
    $age = intval(($_POST['age'] ?? -1));
    createUser($name, $age);

    echo "User with name: $name and age: $age has been created<br> <a href='/'>Home</a>";
}


function createUser(string $name, int $age): void
{
    $users = getUserList();
    $users[] = [
        'name' => $name,
        'age' => $age,
    ];

    file_put_contents(USERS_FILE, json_encode($users));
}

function getUserList(): array
{
    if (!file_exists(USERS_FILE)) {
        return [];
    }

    $str = file_get_contents(USERS_FILE);

    return json_decode($str, true) ?? [];
}

