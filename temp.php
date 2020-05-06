<?php

class AAA
{
    public static $first;
    public $second;
}

$a = new AAA();
$c = new AAA();
$b = new AAA();
$d = new AAA();
$q = new AAA();

$a::$first = 123;
$a->second = 2;












class Payment {

    private static $counter = 0;

    public function transaction()
    {
        self::$counter++;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}


$p3 = new Payment();

$p3->transaction();

function t()
{
    $p3 = new Payment();

    $p3->transaction();
    $p3->transaction();
}

t();