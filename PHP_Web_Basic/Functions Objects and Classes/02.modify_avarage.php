<?php

$num = readline();
$final = 0;

while ($final <= 5) {
    $final = array_sum(array_map('intval', str_split($num))) / strlen($num);
    $num = appendNine($num, $final);
}

echo $num;

function appendNine($num, $final) {
    if ($final >= 5) {
        return $num;
    } else {
        return $num . '9';
    }
}


