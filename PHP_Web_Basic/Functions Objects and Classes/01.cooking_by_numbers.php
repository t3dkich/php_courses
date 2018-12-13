<?php

$num = intval(readline());
$input = explode(', ', readline());

foreach ($input as $command) {
    $num = cooking_num($command, $num);
    echo $num . PHP_EOL;
}

function cooking_num($str, $num) {
    $fns['chop'] = function ($n) {
        return $n / 2;
    };
    $fns['dice'] = function ($n) {
        return sqrt($n);
    };
    $fns['spice'] = function ($n) {
        return $n + 1;
    };
    $fns['bake'] = function ($n) {
        return $n * 3;
    };
    $fns['fillet'] = function ($n) {
        return $n * 0.8;
    };

    return $fns[$str]($num);

}