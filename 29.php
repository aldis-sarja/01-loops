<?php

declare(strict_types=1);

$glyph = '# ';
$background = '  ';

$number = (int)readline("Enter number: ");
$type = readline("Select the type (a/b/c/d): ");

$border = ($number - 1) * 2 + 1;

switch ($type) {
    case 'a':
        $count = 1;
        $height = $number;
        $paddingCount = $number - 1;
        $paddingDir = -1;
        $dir = 2;
        break;
    case 'b':
        $count = $number * 2 -1;
        $height = $number;
        $paddingCount = 0;
        $paddingDir = 1;
        $dir = -2;
        break;
    case 'd':
        $glyph = '  ';
        $background = '# ';
        $count = 1;
        $paddingCount = $number - 1;
        $height = ($number - 1) * 2 - 1;
        $paddingDir = -1;
        $dir = 2;
        $number--;
        break;
    case 'c':
        $count = 1;
        $height = $number * 2 -1;
        $paddingCount = $number - 1;
        $paddingDir = -1;
        $dir = 2;
}

echo str_repeat($background, $border);
echo PHP_EOL;
for ($line = 1; $line <= $height; $line++) {
    echo str_repeat($background, $paddingCount);
    echo str_repeat($glyph, $count);
    echo str_repeat($background, $paddingCount);
    echo PHP_EOL;
    if ($line === $number) {
        $dir = -$dir;
        $paddingDir = -$paddingDir;
    }
    $count += $dir;
    $paddingCount += $paddingDir;
}
echo str_repeat($background, $border);
echo PHP_EOL;
/*
6
# # # # # # # # # # #
*/
