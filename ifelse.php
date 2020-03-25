<?php


/**
 *
 * true && true => true
 * true && false => false
 * false && true => false
 * false && false => false
 *
 * true  || true => true
 * true  || false => true
 * false || true => true
 * false || false => false
 */



$a = rand(0,1);
$b = rand(0,1);

echo "A: $a B: $b <br>";

if ($a === $b && $a === 1) {
    echo "A and B are equal and set to 1";
} else if ($a === $b && $a === 1) {
    echo "A and B are equal and set to 0";
} else {
    echo 'A and B are not equals A = ' . $a . ' B = ' . $b;
}





die();
$a = 0;



if ($a === '') {
    echo "strange";
} else if ($a === 0) {
    echo "smth else";
} else {
    echo "exit";
}