<?php

$arr = [];

for ($i = 0; $i < 1000000; $i++) {
    $arr[$i] = $i;
}

$first = microtime(true);
for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = 1;
}
echo (microtime(true) - $first) . "<br>";

$len = count($arr);
$first = microtime(true);
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = 1;
}
echo (microtime(true) - $first) . "<br>";




















die();
//Task $arr = [1,3,5,7,5,3,4,6,8,0] => get first even number => 4



for ($i = 0; $i < 10; $i++) {
    if ($i === 9) {
        $arr[] = 8;
    } else {
        $arr[] = rand(1,10);
    }

}


for ($i = 0; $i < 10; $i++) {
    echo "TRY TO FIND: " . PHP_EOL;
    if ($arr[$i] % 2 === 0) {
        echo $arr[$i] . PHP_EOL;
        break;
    }
}



for ($i = 0; $i < count($arr); $i++) {
    // some code
}

$len = count($arr);

for ($i = 0; $i < $len; $i++) {
    // some code
}
















die();


for ($i = 0; $i < 10; $i++) {
    /** Variant 1 */
    // (expression) ? true : false
    echo ($i % 2 === 0) ? "$i - 4etnoe<br>" : "$i ne4etnoe<br>";

    /** Variant 2 */
    /**if ($i % 2) {
        echo "$i - 4etnoe<br>";
    } else {
        echo "$i - ne4etnoe<br>";
    }*/


    /** Variant 3 */
    /**
    if ($i % 2) {
        echo "$i - 4etnoe<br>";
        continue;
    }

    echo "$i - ne4etnoe<br>";
     */
}





die();
$arr = [];

$len = rand(1,20);

/**  How does it work
 * 1) $i = 0;
 * 2) $i < 10 => true
 * 3) $arr[] = $i; => $arr[0] => 0
 * 4) $i++ => $i = $i + 1; $i += 1; => $i = 1
 * 5) $i < 10
 * 6) $arr[] = $i; => $arr[1] => 1
 * 7) $i++ => $i = $i + 1; $i += 1; => $i = 2
 */
for ($i = 0; $i < $len; $i++) {
    $arr[] = rand(1,100);
}

print_r($arr);

for ($i = 0; $i < count($arr); $i++) {

    echo $arr[$i];

    if ($i >= count($arr) - 1) {
        break;
    }

    echo ', ';
}


