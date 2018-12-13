<?php

[$rows, $cols] = explode(', ', readline());

$matrix = [];
for ($i = 0; $i < $rows[0]; $i++) {
    $matrix[$i] = explode(', ', readline());
}

$sum = 0;
$max_sum = 0;
for ($i = 0; $i < $rows - 1; $i++) {
    for ($y = 0; $y < $cols - 1; $y++) {
        $sum += $matrix[$i][$y] + $matrix[$i + 1][$y] + $matrix[$i][$y + 1] + $matrix[$i + 1][$y + 1];
        if ($sum > $max_sum) {
            $max_sum = $sum;
            $z = $matrix[$i][$y];
            $x = $matrix[$i + 1][$y];
            $c = $matrix[$i][$y + 1];
            $v = $matrix[$i + 1][$y + 1];
        }
        $sum = 0;
    }

}
echo $z.' '.$c.PHP_EOL;
echo $x.' '.$v.PHP_EOL;
echo $max_sum;