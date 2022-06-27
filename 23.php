<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$numberOfLines = $number * 2 + 1;
$middleLine = $number + 1;
$roof = $number * 2 + 1;
$width = $number * 2 - 1;

$text = "STOP!";

echo str_repeat('.', $number + 1);
echo str_repeat('_', $roof);
echo str_repeat('.', $number + 1);
echo PHP_EOL;

$dir = 1;
$count = 0;

$leftBorder = '//';
$rightBorder = '\\\\';


for ($line = 1; $line <= $numberOfLines; $line++) {
    echo str_repeat('.', $number - $count);
    echo $leftBorder;

    if ($line === $middleLine) {
        echo str_pad($text, $width, '_', STR_PAD_BOTH);
        echo $rightBorder;
        echo PHP_EOL;
        $leftBorder = '\\\\';
        $rightBorder = '//';
        $dir = -1;
        continue;
    }
    echo str_repeat('_', $width);
    echo $rightBorder;
    echo str_repeat('.', $number - $count);
    echo PHP_EOL;

    $width += 2*$dir;
    $count += $dir;
}
