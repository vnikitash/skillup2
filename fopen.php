<?php
const FILE_TIME = 'time.txt';

$fh = fopen("time.txt", "a+");

fwrite($fh, "qqq");
fclose($fh);