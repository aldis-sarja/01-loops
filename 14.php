<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

$step = $number % 2 ? 1 : 2;
$left  = intdiv($number, 2);
$half = (int)round($number/2);

$middleLen = $step;
$counter = 0;
$dir = 1;
$steps = $number % 2 ? $number : $number-1;
for ($line = 1; $line <= $steps; $line++) {
    if ($line === $half) {
        $dir = -1;
    }

    echo str_repeat('-', $left - ($step - 1) - $counter);
    echo '*';
    if ($counter === 0 && $step === 2) {
        echo '*';
    }

    if ($counter > 0) {
        echo str_repeat('-', $middleLen);
        echo '*';
        $middleLen += $dir*2;
    }
    echo str_repeat('-', $left - ($step - 1) - $counter);
    echo PHP_EOL;

    $counter += $dir;
}
