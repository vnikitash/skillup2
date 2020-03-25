<?php


















die();
$found = false;
$arr = [];

$len = 10;





for ($i = 0; $i < $len; $i++) {
    $arr[] = rand(1,10);
}
print_r($arr);

$found = false;
$i = 0;

while (!$found) {
    echo "TRY:<br>";
    if ($arr[$i] % 2 === 0) {
        $found = true;
        echo $arr[$i];
    }
    $i++;
}

for ($i = 0; $i < $len; $i++) {
    if ($arr[$i] % 2 === 0) {
        echo $arr[$i];
    }
}







die();



while (!$found) {
    $arr = [];

    for ($i = 0; $i < $len; $i++) {
        $arr[] = rand(1,10);
    }

    $found = true;

    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] % 2 === 0) {
            $found = false;
        }
    }
}

print_r($arr);
die();
















$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = $i;
}

print_r($arr);

$arr = [];
$i = 0;
while ($i < 10) {
    $arr[] = $i;
    $i++;
}

print_r($arr);
