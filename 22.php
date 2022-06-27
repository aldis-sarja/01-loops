<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");
$direction = readline("Select direction (R/L): ");

if ($direction === 'R') {
    $leftPad = 0;
    $padDir = 2;
} else {
    $leftPad = $number - 1;
    $padDir = -1;
}

$lines = $number*2 - 1;

$dir = 1;
$count = 0;

for ($line = 0; $line < $lines; $line++) {
    echo str_repeat(' ', $leftPad);
    echo str_repeat('*', $number - $count);
    echo PHP_EOL;
    if ($line === intdiv($lines, 2)) {
        $dir = -1;
        $padDir = -$padDir;
    }
    $count += $dir;
    $leftPad += $padDir;
}
