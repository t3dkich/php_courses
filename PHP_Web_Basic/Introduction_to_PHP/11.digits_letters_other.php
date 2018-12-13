<?php

$input = str_split(readline());
$digits = [];
$letters = [];
$symbols = [];

foreach ($input as $one) {
    if (is_numeric($one)) {
        array_push($digits, $one);
    } else if (ctype_alpha($one)) {
        array_push($letters, $one);
    } else {
        array_push($symbols, $one);
    }
}

echo implode('', $digits) . PHP_EOL .
    implode('', $letters) . PHP_EOL .
    implode('', $symbols);