<?php



$emails = 0;

do {
    $emails = checkEmailsCount();
} while ($emails < 100);

echo "Hi there. You need to respond on $emails emails.";



function checkEmailsCount(): int
{
    return rand(1,140);
}


/**
$i = 100;

while ($i < 10) {
    echo "I am in (while)<br>";
}

do {
    echo "I am in (do-while)";
} while ($i < 10);
 **/