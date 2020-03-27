<?php









$fruits = ['apple', 'peach', 'lemon', 'melon'];

$str = implode(",", $fruits);

file_put_contents("fruits", $str);
$str = file_get_contents("fruits");

$restoredArray = explode(',', $str);

print_r($restoredArray);















die();




//1 - implode - explode


$fruits = ['apple', 'peach', 'lemon', 'melon'];

$str = implode(", ", $fruits);

echo $str;

$newArray = explode(', ', $str);
print_r($newArray);








die();
$arr = [1,4,3,6,1];
sort($arr); //vs asort($arr)

$len = count($arr);

for($i = 0; $i < $len; $i++) {
    echo $arr[$i] . "<br>";
}























die();
$arr = [
    4,3,6,1,2
];


print_r($arr);


asort($arr);


print_r($arr);

ksort($arr);

print_r($arr);