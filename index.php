<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class Product
{
    public function __construct($id)
    {
        //Load product from DB by ID
    }

    public function updateName(string $name) {
        //UPDATE IN DB
    }

    public function updatePrice(float $price)
    {
        //UPDATE IN DB
    }

    public function updateSorting(int $sorting)
    {
        //UPDATE IN DB
    }
}

$product = new Product(3);

$product->updateName("Samsung");
$product->updatePrice(11);
$product->updateSorting("Samsung");

//NO EXCEPTIONS















class Student
{
    private $filename;
    public $firstName;
    public $lastName;
    public $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->filename = microtime(true) . rand(1,100) . '.txt';
        $this->age = $age;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function test1()
    {
        file_put_contents($this->filename, 1, FILE_APPEND);
    }

    public function test2()
    {
        file_put_contents($this->filename, 2, FILE_APPEND);
    }

    public function test3()
    {
        file_get_contents($this->filename);
        unlink($this->filename);
    }

    public function __destruct()
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }
}


$alex = new Student("Alex", "Alekseenko", 40);
$oleg = new Student("Oleg", "Olegov", 36);



$alex->test1();
$oleg->test2();
die();
$oleg->test1();
$alex->test2();
$oleg->test3();
$alex->test3();

die();






















class PaymentSystem
{

    protected $tax = 0.01;

    public function pay(int $amount)
    {
        echo get_class($this) . "  you will pay " . $amount * (1 + $this->tax) . "<br>";
    }
}

class LiqPay extends PaymentSystem
{
    protected $tax = 0.02;
}

class iPay extends PaymentSystem
{
    protected $tax = 0.0015;
}


$liqPay = new LiqPay();
$iPay= new iPay();

$liqPay->pay(100);
$iPay->pay(100);





















die();

class Payment
{
    public $requestTime;
    public $transactionNumber;

    public function processPayment(float $amount)
    {
        $this->requestTime = 'qasdasdad';
        $this->transactionNumber = "#" . rand(1,100);
        ///$amount
        ///
        /// send email....
        /// $th

        $this->log("DONE WITH AM: $amount");
    }

    private function log(string $data)
    {
        file_put_contents("LOG.txt", $data, FILE_APPEND);
    }
}


$payment = new Payment();
$payment->processPayment(1.1);



























die();
class User
{
    public $first_name;
    public $last_name;
    private $phone;

    public function setFirstName(string $firstName)
    {
        $this->first_name = $firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->last_name = $lastName;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getPhone(): ?string
    {
        return "+********" . substr($this->phone, -4);
    }

}


$user = new User();
$user->setFirstName("Viktor");
$user->setLastName("Nikitash");
$user->setPhone("+380998887766");

echo $user->first_name . "<br>";
echo $user->last_name . "<br>";
echo $user->getPhone() . "<br>";




die();