<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");
$char = readline("Select character: ");

for ($count = 1; $count <= $number; $count++) {
    echo str_repeat("$char ", $count) . PHP_EOL;
}
