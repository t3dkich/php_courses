<?php

$num = intval(readline());
$count = 1;
$sum = 0;

for ($i = 0; $i < $num; $i++) {
    echo $count.PHP_EOL;
    $sum += $count;
    $count+=2;
}

echo "Sum: $sum";