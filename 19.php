<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

for ($line = 0; $line < $number; $line++) {
    $width = $number - $line;
    for ($col = 0; $col < $width; $col++) {
        echo ($number - $col) . ' ';
    }
    echo str_repeat(' ', $line * 4);
    for ($col = $width - 1; $col >= 0; $col--) {
        echo ($number - $col) . ' ';
    }
    echo PHP_EOL;
}
