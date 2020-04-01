<?php
const FILE_TIME = 'time.txt';

function addTimeStamp(): void
{
    file_put_contents(FILE_TIME, time() . PHP_EOL, FILE_APPEND);
}


function getTimeStapms(): array
{
    $str = file_get_contents(FILE_TIME);
    $times = explode(PHP_EOL, $str);

    $times = array_filter($times, function ($item) {
        if (!$item) {
            return false;
        }

        return $item % 2 === 1;
    });

    print_r($times);
    return [];
}

getTimeStapms();