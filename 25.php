<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$width = $number * 5;
$handleLength = $number * 3;
$handleThick = intdiv($number, 2);
$hammerWidth = $number - 1;
$hammerExtLines = $handleThick;
$hammerNarrowLines = $number;

for ($line = 1; $line <= $hammerNarrowLines; $line++) {
    echo str_repeat('-', $handleLength);
    echo '*';
    echo str_repeat('-', $line - 1);
    echo '*';
    echo str_repeat('-', $width - $handleLength - 1 - $line);
    echo PHP_EOL;
}
for ($line = 1; $line <= $handleThick; $line++) {
    echo str_repeat('*', $handleLength + 1);
    echo str_repeat('-', $hammerWidth);
    echo '*';
    echo str_repeat('-', $hammerWidth);
    echo PHP_EOL;
}
for ($line = 1; $line < $hammerExtLines; $line++) {
    echo str_repeat('-', $handleLength - $line + 1);
    echo '*';
    echo str_repeat('-', $hammerWidth + 2*($line - 1));
    echo '*';
    echo str_repeat('-', $hammerWidth - $line + 1);
    echo PHP_EOL;
}

$left = $handleLength - $hammerExtLines + 1;
$right = $hammerWidth - $hammerExtLines + 1;
echo str_repeat('-', $left);
echo str_repeat('*', $width - $left - $right);
echo str_repeat('-', $right);
echo PHP_EOL;
