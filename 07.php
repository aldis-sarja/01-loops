<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

for ($line = 1; $line <= $number; $line++) {
    if ($line === 1 || $line === $number) {
        echo '+ ';
    } else {
        echo '| ';
    }
    echo str_repeat('- ', $number - 2);

    if ($line === 1 || $line === $number) {
        echo '+';
    } else {
        echo '|';
    }
    echo PHP_EOL;
}
