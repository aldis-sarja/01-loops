<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$pad = '';
for ($line = 1; $line <= $number; $line++) {
    echo $pad;
    echo str_repeat('# ', $number);
    echo PHP_EOL;
    if ($pad === '') {
        $pad = ' ';
    } else {
        $pad = '';
    }
}
