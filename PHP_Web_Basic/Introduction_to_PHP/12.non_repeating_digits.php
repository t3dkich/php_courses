<?php

$input = readline();
$output = [];

if ($input < 102) {
    echo 'no';
    return;
}

for ($i = 102; $i <= min(987,$input); $i++) {
    $last = $i % 10;
    $temp = intval($i / 10);
    $mid = $temp % 10;
    $first = intval($temp / 10);
    if ($last !== $mid && $last !== $first
        && $mid !== $first && $mid !== $last
        && $first !== $mid && $first !== $last) {
        $output[] = $i;
    }
}

echo implode(', ', $output);
