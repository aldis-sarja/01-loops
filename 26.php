<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$pad = $number * $number;
$pad = strlen("$pad") + 1;

echo ' * |';
for ($c = 1; $c <= $number; $c++) {
    echo str_pad("$c", $pad, ' ', STR_PAD_LEFT);
}
echo PHP_EOL;

echo str_repeat('-', $number * 4 + 4);
echo PHP_EOL;

for ($row = 1; $row <= $number; $row++) {
    echo str_pad("$row", 2, ' ', STR_PAD_LEFT);
    echo ' |';
    for ($col = 1; $col <= $number; $col++) {
        $result = $row * $col;
        echo str_pad("$result", $pad, ' ', STR_PAD_LEFT);
    }
    echo PHP_EOL;
}
