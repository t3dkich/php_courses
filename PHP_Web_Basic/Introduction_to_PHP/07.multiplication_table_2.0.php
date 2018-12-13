<?php

$firstNum = intval(readline());
$secondNum = intval(readline());

if ($secondNum < 11) {
    for ($i = $secondNum; $i <= 10; $i++) {
        echo "$firstNum X $i = ".($firstNum*$i).PHP_EOL;
    }
} else {
    echo "$firstNum X $secondNum = ".($firstNum*$secondNum);
}
