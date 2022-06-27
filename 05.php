<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$lines = ($number % 2) ? $number + 2 : $number + 1;
$direction = 1;
$pos = 0;
for ($count = 0; $count < $lines; $count++) {
    echo str_repeat('.', $pos);
    echo '*';
    if (($number - $pos * 2) > 0) {
        echo str_repeat('.', $number - $pos * 2);
    } else {
        $direction = -1;
    }
    if (($number - $pos*2) >= 0) {
        echo '*';
    }
    echo str_repeat('.', $pos);
    echo PHP_EOL;
    $pos += $direction;
}
