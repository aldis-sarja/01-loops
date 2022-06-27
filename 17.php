<?php

declare(strict_types=1);


$number = (int) readline("Enter number: ");
$text = readline("What should we print on it?: ");

$textLen = strlen($text);
$left = intdiv($number - $textLen, 2);

if ($number %2) {
    $width = intdiv($number, 2) - 4;
    $midSpaces = 5;
} else {
    $width = intdiv($number, 2) - 5;
    $midSpaces = 6;
}

$spaces = 2;
echo "width: $width,  spaces: $spaces\n";
while ($midSpaces > 0) {
    echo str_repeat(' ', $spaces);
    echo str_repeat('*', $width);
    echo str_repeat(' ', $midSpaces);
    echo str_repeat('*', $width);
    echo PHP_EOL;
    $spaces--;
    $width += 2;
    $midSpaces -= 2;
}

echo str_repeat('*', $left);
echo $text;
echo str_repeat('*', $number - $left - $textLen);
echo PHP_EOL;

$width = $number - 2;
$spaces = 1;
while ($width > 0) {
    echo str_repeat(' ', $spaces);
    echo str_repeat('*', $width);
    echo PHP_EOL;
    $spaces++;
    $width -= 2;
}
