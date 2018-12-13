<?php

$input = explode(' ', readline());
$stock = [];

while (true) {
    if (count($input) >= 3) {
        if ($input[0] === 'stock') {
            if (!array_key_exists($input[1], $stock)) {
                $stock["$input[1]"] = $input[2];
            } else {
                $stock["$input[1]"] += $input[2];
            }
        } else if ($input[0] === 'buy') {
            if (array_key_exists($input[1], $stock)) {
                if ($stock["$input[1]"] === 0) {
                    echo $input[1] . ' out of stock' . PHP_EOL;
                } else if ($stock["$input[1]"] >= $input[2]) {
                    $stock["$input[1]"] -= $input[2];
                } else {
                    $stock["$input[1]"] = 0;

                }
            } else {
                echo $input[1] . " doesn't exist" . PHP_EOL;
            }
        }
    } else {
        if ($input[0] === 'shopping' && $input[1] === 'time') {
            $input = explode(' ', readline());
            continue;
        } else if ($input[0] === 'exam' && $input[1] === 'time') {
            foreach ($stock as $item => $value) {
                if ($value > 0)
                    echo $item . ' -> ' . $value . PHP_EOL;
            }
            return;
        }
    }
    $input = explode(' ', readline());


}


