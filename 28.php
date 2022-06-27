<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");
$type = readline("Select the type (a/b/c/d): ");
switch ($type) {
    case 'a':
        $count = 1;
        $padding = false;
        $dir = 1;
        break;
    case 'b':
        $count = $number;
        $dir = -1;
        $padding = false;
        break;
    case 'c':
        $count = $number;
        $dir = -1;
        $padding = true;
        break;
    case 'd':
        $count = 1;
        $dir = 1;
        $padding = true;
}


for ($line = 1; $line <= $number; $line++) {
    if ($padding) {
        echo str_repeat(' ', ($number - $count) * 2);
    }
    echo str_repeat('# ', $count);

    $count += $dir;
    echo PHP_EOL;
}
