<?php

declare(strict_types=1);


$width = (int)readline("Enter number: ");

for ($line = 0; $line <= $width; $line++) {
    echo str_repeat(' ', $width - $line);
    echo str_repeat('*', $line);
    echo ' | ';
    echo str_repeat('*', $line);
    echo PHP_EOL;
}

/*

*/
