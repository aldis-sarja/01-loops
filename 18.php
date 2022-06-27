<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

for ($line = 1; $line <= $number; $line++) {
    for ($exp = $line-1; $exp >= 0 ; $exp--) {
        $num = pow(2, $exp);
        echo str_pad("$num", 4, ' ', STR_PAD_LEFT);
    }
    echo PHP_EOL;
}
