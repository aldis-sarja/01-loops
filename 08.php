<?php

declare(strict_types=1);


$half = (int)readline("Enter number: ");
$width = $half * 2 - 1;
$count = 1;
$direction = 1;

for ($line = 1; $line <= $width; $line++) {
    echo str_repeat(' ', $half - $count);
    echo str_repeat('* ', $count);
    echo PHP_EOL;
    if ($line >= $half) {
        $direction = -1;
    }
    $count += $direction;
}

/*


*/