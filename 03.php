<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");

for ($count = 1; $count <= $number; $count++) {
    if ($count === 1 || $count === $number) {
        echo str_repeat('*', $number) . PHP_EOL;
    } else {
        echo '*' . str_repeat(' ', $number-2) . '*' . PHP_EOL;
    }
}
