<?php

$input = explode(' ', readline());

if (count($input) > 1)
for ($i = 0; $i < count($input); $i++) {
    for ($i = 0; $i < count($input) - 1; $i++) {
        $input[$i] = $input[$i] + $input[$i + 1];
    }
    array_pop($input);
    $i = 0;
}

echo $input[0];