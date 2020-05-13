<?php

/**
 * SOLID
 * S - Single Responsibility
 * O - Open close principle
 * L - Liskov substitution principle
 * I - Interface segregation
 * D - Dependency Inversion => use interfaces instead of class bindings if possible
 */












/**
class A
{

    public function test()
    {

    }
    //...
}

class B extends A
{
    //....
    public function t2()
    {

    }
}

class Service
{
    public function serve(B $obj) // ???? A (5) => B (50) +++ // ??? B (50) => A (5) ----
    {
        $obj->t2();
        //.....
    }
}

/**
 * 1 against
 * 2 pros
 */