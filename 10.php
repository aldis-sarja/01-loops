<?php

declare(strict_types=1);


$number = (int)readline("Enter number: ");

$half = intdiv($number, 2);

$nextNumber = 1;
$dir = 0;

for ($line = 0; $line < $number; $line++) {
    if ($line > 1) {
        $nextNumber = $line;
    }
    $num = 1;
    echo str_repeat(' ', $half * 4 - $line * 2);
    for ($col = 0; $col <= $line; $col++) {
        if (($line % 2)
            && ($col > intdiv($line, 2)) // pārbaudām vai ciparu pāris
            && ($col-1 === intdiv($line, 2)))  { // ir ap simetrijas asi

                $dir = 0;

        } elseif ($col > intdiv($line+1, 2)) {
            $dir = -2;
        } else {
            $dir = 2;
        }
        if ($col === 1) {
            $num = $nextNumber;
        }
        if ($col > 1) {
            $num += $dir;
        }
        if ($col === $line) {
            $num = 1;
        }
        echo "{$num}   ";
    }
    echo PHP_EOL;
}

/*
5
            1
          1   ~1
        1   2   1
      ~1   3   ~3   ~1
    1   4   6   4   1
  ~1   ~5   5   ~5   ~5   ~1   $line = 5
1   6   8   10   8   6   1
kad:
$col = 3 > $line/2   simetrijas ass labajā pusē
$col - 1 === $line   simetrijas ass kreisajā pusē


*/
