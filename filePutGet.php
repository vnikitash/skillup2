<?php
const FILE_TIME = 'time.txt';

function addTimeStamp(): void
{
    file_put_contents(FILE_TIME, date("d-m-Y H:i:s", time()) . PHP_EOL, FILE_APPEND);
}


function getTimeStapms(): array
{
    $str = file_get_contents(FILE_TIME);
    $times = explode(PHP_EOL, $str);

    return array_filter($times);
}

addTimeStamp();
$arr = getTimeStapms();
print_r($arr);