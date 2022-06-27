<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

$direction = readline("Select direction: (right/left) ");

if ($direction === 'right') {
    $direction = -1;
    $spaces = $number - 1;
} else {
    $direction = 1;
    $spaces = 0;
}
$fill = readline("Is it empty? (Y/n) ");
$fill = $fill === 'n' ? '*' : ' ';

for ($line = 1; $line <= $number; $line++) {
    echo str_repeat(' ', $spaces);
    $spaces += $direction;
    echo '*';
    if ($line === 1 || $line === $number) {
        echo str_repeat('*', $number - 2);
    } else {
        echo str_repeat($fill, $number - 2);
    }
    echo '*';
    echo PHP_EOL;
}
