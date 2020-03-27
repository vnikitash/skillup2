<?php

//$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$action = $_GET['action'] ?? 'index';


switch ($action) {
    case "create":
        $name = $_POST['name'] ?? null;
        $age = (int) ($_POST['age'] ?? null);

        if (!$name || !$age) {
            die("No data provided");

        }

        createEntity($name, $age);

        break;
    case "index":
    default:
        echo getTable();
}



function createEntity(string $name, int $age)
{
    file_put_contents("users.txt", "name=$name,age=$age;", FILE_APPEND);
    echo getTable();
}



function getTable(): string
{
    $html  = "<form action='table.php?action=create' method='POST'>
    <input type='text' name='name'>
    <input type='number' name='age'>
    <input type='submit' value='Create'>
    </form>";


    $html .= "<table border='1'>
        <thead>
            <th>Name</th>
            <th>Age</th>
        </thead>
        <tbody>";


    foreach (getData() as $field => $value) {
        $html .= "<tr>";
        $html .= "<td>{$value['name']}</td>";
        $html .= "<td>{$value['age']}</td>";
        $html .= "</tr>";
    }

    $html .= "</tbody></table>";


    return $html;
}

function getData(): array
{
    $users = [];

    $userStr = file_get_contents("users.txt");

    if (!$userStr) {
        return $users;
    }

    $usrPcs = explode(";",$userStr);

    foreach ($usrPcs as $row) {
        if (!$row) {
            continue;
        }

        $tmp = explode(",", $row);

        $r = [];
        foreach ($tmp as $t) {
            list($key, $value) = explode("=", $t);
            $r[$key] = $value;
        }

        $users[] = $r;
    }

    return $users;
}