<?php

$number = rand(1,6);

echo "Number $number<br>";

switch ($number) {
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
    case 5:
    case 6:
        echo "4 or 5 or 6";
        break;
    default:
        echo "five";
        break;

}

die();
if ($number === 1) {
    echo "one";
} else if ($number === 2) {
    echo "two";
} else if ($number === 3)  {
    echo "third";
} else if ($number === 4 || $number === 5 || $number === 6) {
    echo "four";
} else {
    echo "five";
}