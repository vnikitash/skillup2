<?php

const USERS_FILE = 'users.json';

function createUser(string $login, string $pass)
{
    $users = listOfUsers();
    $users[] = [
        'id' => md5($login . rand(1,100)),
        'login' => $login,
        'password' => $pass,
    ];
    writeJSONFile(USERS_FILE, $users);
}

function listOfUsers(): array
{
    return readJSONFile(USERS_FILE);
}

function removeUser(string $id)
{
    $filteredUsers = array_filter(listOfUsers(), function ($user) use ($id) {
        return $user['id'] !== $id;
    });

    writeJSONFile(USERS_FILE, $filteredUsers);
}

function readJSONFile(string $filename): array
{
    if (!file_exists($filename)) {
        return [];
    }

    return json_decode(file_get_contents($filename), true) ?? [];
}

function writeJSONFile(string $filename, array $data)
{
    file_put_contents($filename, json_encode($data));
}

function showMain()
{
    global $smarty;

    $smarty->assign('users', listOfUsers());
    $smarty->assign('roles', [
        'admin' => "Admin",
        'user' => "User",
        'moderator' => "Moderator",
        'content' => 'Content writer'
    ]);
    $smarty->display('table.tpl');
}


time();