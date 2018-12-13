<?php

$inputArr = explode(' ',readline());
$count = readline();
$arrs = [];
for ($i = 0; $i < $count; $i++) {
    $last = array_pop($inputArr);
    array_unshift($inputArr, $last);
    $arrs[] = $inputArr;
}
$finalArr = [];
for ($i = 0; $i < count($arrs[0]); $i++) {
    $finalArr[$i] = 0;
    for ($y = 0; $y < $count; $y++) {
        $finalArr[$i] += $arrs[$y][$i];
    }
}
echo implode(' ', $finalArr);
