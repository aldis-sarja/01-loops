<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");
$type = readline("Select the type (a/b/c/d): ");

$padNum = strlen("$number") + 1;

switch ($type) {
    case 'a':
        $firsLine = 1;
        $firstNum = 1;
        $numChange = 1;
        $lineWidthChange = 1;
        $lineNumberingChange = 0;
        $leftPadding = 0;
        $padChange = 0;
        break;
    case 'b':
        $firsLine = $number;
        $firstNum = 1;
        $numChange = 1;
        $lineWidthChange = -1;
        $lineNumberingChange = 0;
        $leftPadding = 0;
        $padChange = $padNum;
        break;
    case 'c':
        $firsLine = 1;
        $firstNum = 1;
        $numChange = 1;
        $lineWidthChange = 1;
        $lineNumberingChange = 0;
        $leftPadding = ($number - 1) * 2;
        $padChange = -$padNum;
        break;
    case 'd':
        $firsLine = $number;
        $firstNum = $number;
        $numChange = -1;
        $lineWidthChange = -1;
        $lineNumberingChange = -1;
        $leftPadding = 0;
        $padChange = 0;
 }

$nextLine = $firsLine;
$nextNum = $firstNum;
for ($line = 1; $line <= $number; $line++) {
    echo str_repeat(' ', $leftPadding);
    $num = $nextNum;
    for ($col = 0; $col < $nextLine; $col++) {
        echo str_pad("$num", $padNum, ' ');
        $num += $numChange;
    }
    echo PHP_EOL;
    $nextLine += $lineWidthChange;
    $leftPadding += $padChange;
    $nextNum += $lineNumberingChange;
}
