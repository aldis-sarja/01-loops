<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$blockWidth = $number * 2;

echo str_repeat('*', $blockWidth);
echo str_repeat(' ', $number);
echo str_repeat('*', $blockWidth);
echo PHP_EOL;

for ($count = 0; $count < ($number - 2); $count++) {
    echo '*' . str_repeat('/', $blockWidth - 2) . '*';
    $middle = ' ';
    if ($count === intdiv($number - 3,2)) {
        $middle = '|';
    }
    echo str_repeat($middle, $number);
    echo '*' . str_repeat('/', $blockWidth - 2) . '*';

    echo PHP_EOL;
}
echo str_repeat('*', $blockWidth);
echo str_repeat(' ', $number);
echo str_repeat('*', $blockWidth);
echo PHP_EOL;
