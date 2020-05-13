<?php

abstract class Payment
{
    abstract public function pay(int $amount);

    public function whoAmI()
    {
        echo "ABSTRACT!";
    }
}


class LiqPay extends Payment
{
    protected $tax = 0.012;

    public function pay(int $amount)
    {
        echo "Some payment";
    }
}

class Stripe extends Payment
{
    protected $tax = 0.015;

    public function pay(int $amount)
    {
        echo "You will pay " . $amount * (1 + $this->tax) . PHP_EOL;
    }
}

class BrainTree extends Payment
{
    public function pay(int $amount)
    {
        echo "You will pay " . $amount . PHP_EOL;
    }
}

class PaymentService
{
    private const PRICE = 10;

    public function createSubscription(Payment $paymentMethod)
    {
        $paymentMethod->pay(self::PRICE);
    }
}

$stripe = new Stripe();
$lp = new LiqPay();
#$stripe->whoAmI();

$ps = new PaymentService();
$ps->createSubscription($stripe);
$ps->createSubscription($lp);