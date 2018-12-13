<?php

$string = readline();

if (strlen($string) > 20) {
    echo substr($string, 0, 20);
} else {
    $index = 20 - strlen($string);
    echo $string.str_repeat('*', $index);
}