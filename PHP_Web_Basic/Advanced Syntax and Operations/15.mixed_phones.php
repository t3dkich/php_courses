<?php

$input = explode(' : ', trim(readline()));
$isNumeric = true;
$phones = [];
while ($input[0] !== 'Over') {
    $first = str_split($input[0]);
    for ($i = 0; $i < count($first); $i++) {
        if (!is_numeric($first[$i])) {
            $isNumeric = false;
            break;
        }
    }
    if ($isNumeric) {
        $phones["$input[1]"] = $input[0];
    } else {
        $phones["$input[0]"] = $input[1];
    }
    $input = explode( ' : ', trim(readline()));
    $isNumeric = true;
}

ksort($phones);
foreach ($phones as $x => $phone) {
    echo $x . ' -> ' . $phone . PHP_EOL;
}

