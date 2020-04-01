<?php

$arr = array_slice(scandir(__DIR__), 3);

showAllPHPFile($arr);

function showAllPHPFile(array $arr, $dir = __DIR__) {

    foreach ($arr as $file) {
        if (is_dir($dir . "/" . $file)) {
            $tmpArr = array_slice(scandir($dir . '/' . $file),2);

            showAllPHPFile($tmpArr, $dir . '/' . $file . '/');
            continue;
        }

        if (strpos($file, ".php") !== false) {
            echo $file . "<br>";
        }
    }
}