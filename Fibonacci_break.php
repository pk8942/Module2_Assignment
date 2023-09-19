<?php

function Fibonacci($number)
{

    $num1 = 0;
    $num2 = 1;

    for ($counter = 0; $counter < $number; $counter++) {
        if ($num1 > 100) {
            break;
        }
        echo ' ' . $num1;

        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}
echo "Fibonacci sequence of first 15 numbers without greater than 100 is\n";
$number = 15;
Fibonacci($number);
