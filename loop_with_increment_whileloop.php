<?php

function isEven($start, $end, $step): void
{
    static $i;
    $i = $start;
    while ($i <= $end) {

        if ($i % 2 !== 0) {
            echo $i += 1;
            echo "\n";
        }
        $i -= 1;
        $i += $step;

    }

}
echo "Even numbers from 1 to 20\n";
$start = 1;
$end = 20;
$step = 2;
echo "" . isEven($start, $end, $step);

//$evenNumbers = array_filter($numbers, "isEven");
//print_r($evenNumbers);
