<?php

$arr = [
    'name' => "Viktor",
    'lName' => "Nikitash",
    'age' => 27,
    'position' => 'Tech Lead',
];



foreach ($arr as $key => $field) {
    echo $key . ' <=> ' . $field . "<br>";
}




/**
 *
 * $keys = [
 *      0 => 'name',
 *      1 => 'lName',
 *      2 => 'age'
 * ]
 *
 *
 */
/*
$keys = array_keys($arr);

$len = count($keys);
for ($i = 0; $i < $len; $i++) {
    echo $arr[$keys[$i]];
}*/