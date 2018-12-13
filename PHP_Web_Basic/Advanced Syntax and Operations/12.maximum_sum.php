<?php

[$rows, $cols] = explode(' ', readline());

$matrix = [];

for ($i = 0; $i < $rows[0]; $i++) {
    $matrix[$i] = array_map('intval',explode(' ', readline()));
}

$sum = PHP_INT_MIN;
$max_sum = PHP_INT_MIN;
$final_nums = [];
$temp_nums = [];
for ($i = 0; $i < $rows - 2; $i++) {
    for ($y = 0; $y < $cols - 2; $y++) {
        for ($z = $i; $z < $i + 3; $z++) {
            for ($c = $y; $c < $y + 3; $c++) {
                $num = $matrix[$z][$c];
                $sum += $matrix[$z][$c];
                $temp_nums[] = $num;
            }
        }
        if ($sum > $max_sum) {
            $max_sum = $sum;
            $final_nums = $temp_nums;
        }
        $sum = 0;
        $temp_nums = [];
    }
}

echo 'Sum = ' . $max_sum . PHP_EOL;
for ($i = 0; $i < 9; $i++) {
    echo $final_nums[$i] . ' ';
    if (($i + 1) % 3 === 0) {
        echo PHP_EOL;
    }
}

