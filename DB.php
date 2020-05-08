<?php

class DB
{
    private static $db;

    private function __construct(){}

    public static function getInstance()
    {
        return self::$db ?? self::$db = new mysqli("db", "root", '', 'test');
    }
}

$db = DB::getInstance();