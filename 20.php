<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

for ($line = 0; $line <= $number; $line++) {
    $endNum = $number - $line;
    for ($col = 1; $col <= $endNum; $col++) {
        if ($col > 1) {
            echo ' * ' . $col;
        } else {
            echo $col;
        }
    }
    echo PHP_EOL;
}
