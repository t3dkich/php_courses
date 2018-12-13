<?php

$rows = explode(', ', readline());

$matrix = [];

for ($i = 0; $i < $rows[0]; $i++) {
    $matrix[$i] = explode(', ', readline());
}

$sum = 0;
for ($i = 0; $i < $rows[0]; $i++) {
    for ($y = 0; $y < $rows[1]; $y++) {
        $sum += $matrix[$i][$y];
    }
}

echo $rows[0].PHP_EOL;
echo $rows[1].PHP_EOL;
echo $sum;