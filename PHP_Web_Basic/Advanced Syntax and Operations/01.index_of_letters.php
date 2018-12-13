<?php

$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
    "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$word = strtolower(readline());
for ($i = 0; $i < strlen($word); $i++) {
    for ($y = 0; $y < count($letters); $y++) {
        if ($word[$i] === $letters[$y]) {
            echo $word[$i] . ' -> ' . $y . PHP_EOL;
        }

    }
}