<?php

$str = "nvv";
$letters = range("a", "z");

$len = count($letters) - 1;
$count = 0;

do {
    $count++;
    $rndStr = $letters[rand(0, $len)] . $letters[rand(0, $len)] . $letters[rand(0, $len)];
} while ($rndStr != $str);

echo $rndStr . " from $count attempt!";
