<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$thinWings = $number - 3;
$thickWings = $number - 1;
$wingsWidth = $number - 2;
$lines = $thinWings + $thickWings + 1;
$middle = intdiv($thinWings + $thickWings, 2) + 1;

$wingGlyph = '*';
$jointGlyph = '\\ /';
for ($line = 1; $line <= $lines; $line++) {
    if ($line === $middle) {
        $jointGlyph = '/ \\';
        echo str_repeat(' ', $wingsWidth+1) . '@' . PHP_EOL;
        continue;
    }
    if ($line % 2) {
        $wingGlyph = '*';
    } else $wingGlyph = '-';

    echo str_repeat($wingGlyph, $wingsWidth);
    echo $jointGlyph;
    echo str_repeat($wingGlyph, $wingsWidth);
    echo PHP_EOL;
}
