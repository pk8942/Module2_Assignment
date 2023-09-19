<?php
echo "Numbers from 1 to 50 without divisible by 5 is\n";
for ((int) $i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    printf(" %d \n", $i);
}
