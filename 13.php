<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

if ($number % 2) {
    $startStars = 1;
} else {
    $startStars = 2;
}
echo str_repeat('-', intdiv($number - $startStars, 2));
echo str_repeat('*', $startStars);
echo str_repeat('-', intdiv($number - $startStars, 2));
echo PHP_EOL;
for ($line = 1; $line < $number; $line++) {
    $startStars += 2;
    if ($startStars > $number) {
        echo '|' . str_repeat('*', $number - 2) . '|';
    } else {
        echo str_repeat('-', intdiv($number - $startStars, 2));
        echo str_repeat('*', $startStars);
        echo str_repeat('-', intdiv($number - $startStars, 2));
    }
    echo PHP_EOL;
}
