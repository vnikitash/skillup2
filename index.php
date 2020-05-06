<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "temp.php";

$p = new Payment();
$p->transaction();
$p->transaction();

$p2 = new Payment();
$p2->transaction();









$p = new Payment();

for ($i = 0; $i < 20; $i++) {
    if (rand(0,2) === 2) {
        $p->transaction();
    }
}


$p2 = new Payment();

for ($j = 0; $j < 20; $j++) {
    if (rand(0,2) === 2) {
        $p->transaction();
    }
}





echo Payment::getCounter();









die();
/*
class Deanonymizer
{

    protected static $name = "???";
    public static $countUser = 0;
    public static $countTest = 0;

    public static function whoAmI()
    {
        if (static::$name === "User") {
            self::$countUser++;
        } else {
            self::$countTest++;
        }
    }
}

class User extends Deanonymizer
{
    protected static $name = "User";
}

class Test extends Deanonymizer
{

    protected static $name = "Test";
}


for ($i = 0; $i < 100; $i++) {
    if (rand(0,1)) {
        Test::whoAmI();
        continue;
    }

    User::whoAmI();
}

echo "Users: " . Deanonymizer::$countUser . "<br> Test: " . Deanonymizer::$countTest;

class DB
{
    private $db;

    public static function getDbConnection() {
        $instance = new self();
        $instance->db = new mysqli();
        return $instance;
    }

    public static function update() {

    }

    public static function delete() {

    }
}



DB::update();
DB::delete();



*/



class Loader
{
    public function __construct()
    {
        sleep(5);
    }

    public function sendRequest()
    {
        //TODO
    }

    public static function isServiceAvailable()
    {
        return (bool) rand(0,1);
    }
}


//Pattern Singleton
class DBConnection
{
    private static $db;

    public static function getConnection()
    {
        if (self::$db) {
            echo "OLD CONNECTION<br>";
            return self::$db;
        }
        echo "NEW CONNECTION<br>";
        return self::$db = new mysqli('db', 'root', '', 'test');
    }
}

class DB2
{
    private $db;

    public function getConnection()
    {
        if ($this->db) {
            echo "OLD CONNECTION<br>";
            return $this->db;
        }
        echo "NEW CONNECTION<br>";
        return $this->db = new mysqli('db', 'root', '', 'test');
    }
}





class A
{
    public static $test = 0;
    public $test2 = 0;
}


$a = new A();
$b = new A();
$c = new A();

$b->test2 = 1;

echo "NON STATIC<br>";
echo $a->test2 . "<br>";
echo $b->test2 . "<br>";
echo $c->test2 . "<br>";


A::$test = 12;

echo "STATIC: <br>";
echo $c::$test . "<br>";
echo $a::$test . "<br>";
echo $b::$test . "<br>";
echo A::$test . "<br>";




















