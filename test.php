<?php

class Model
{
    protected $table = '';

    public function selectAll()
    {
        $tableToUse = strtolower(static::class) . "s";

        if ($this->table !== null) {
            $tableToUse = $this->table;
        }
        echo  "SELECT * FROM $tableToUse<br>";
    }
}

class User extends Model
{

}

class Test extends Model
{
    protected $table = 'test_table';
}

$user = new User();
$user->selectAll();
(new Test())->selectAll();






















class Photo extends Model
{

}

class Video extends Model
{
    protected $table = 'my_videos';
}