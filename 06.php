<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$width = $number + 1;

for ($count = 0; $count <= $number; $count++) {
    echo str_repeat('.', $count) . str_repeat('*', $width - $count) . PHP_EOL;
}
