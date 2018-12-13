<?php

$n = readline();
$k = readline();
$nums = [1];

for ($i = 1; $i < $n; $i++) {
    $nums[$i] = 0;
    for ($y = $i - 1; $y >= max(0, $i - $k); $y--) {
        $nums[$i] += $nums[$y];
    }
}

echo implode(' ', $nums);