<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

for ($count = 0; $count < $number; $count++) {
    echo str_repeat('*', $number) . PHP_EOL;
}
