<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$startChar = ord('A');

for ($count = 1; $count <= $number; $count++) {
    $char = chr($startChar++);
    echo str_repeat("$char ", $count) . PHP_EOL;
}
