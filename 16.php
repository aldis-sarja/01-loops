<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

$roof = (int)($number/2);
$base = $roof + 1;
$joint = $roof < 2 ? 0 : $roof;
$width = $number*2 - 2;

echo '/';
echo str_repeat('^', $roof);
echo '\\';
echo str_repeat('_', $joint);
echo '/';
echo str_repeat('^', $roof);
echo '\\';
echo PHP_EOL;

for ($line = 2; $line < $number - 1; $line++) {
    echo '|';
    echo str_repeat(' ', $width) . '|';
    echo PHP_EOL;
}

echo '|' . str_repeat(' ', $base);
echo str_repeat('_', $joint);
echo str_repeat(' ', $base) . '|';
echo PHP_EOL;

echo '\\';
echo str_repeat('_', $roof);
echo '/';
echo str_repeat(' ', $joint);
echo '\\';
echo str_repeat('_', $roof);
echo '/';
echo PHP_EOL;
