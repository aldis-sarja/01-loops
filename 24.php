<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$width = $number * 2 - 1;
$inside = $number - 2;
$borders = intdiv($number, 2);


echo str_repeat('.', $borders);
echo str_repeat("#", $number);
echo str_repeat('.', $borders);
echo PHP_EOL;

for ($line = 2; $line < $number; $line++) {
    echo str_repeat('.', $borders);
    echo '#' . str_repeat('.', $inside) . '#';
    echo str_repeat('.', $borders);
    echo PHP_EOL;
}

echo str_repeat('#', $borders + 1);
echo str_repeat('.', $inside);
echo str_repeat('#', $borders + 1);
echo PHP_EOL;

$count = 4;
for ($line = 1; $line < $number - 1; $line++) {
    echo str_repeat('.', $line);
    echo '#';
    echo str_repeat('.', $width - $count);
    echo '#';
    echo str_repeat('.', $line);
    echo PHP_EOL;
    $count += 2;
}
echo str_repeat('.', $number - 1);
echo '#';
echo str_repeat('.', $number - 1);
echo PHP_EOL;
