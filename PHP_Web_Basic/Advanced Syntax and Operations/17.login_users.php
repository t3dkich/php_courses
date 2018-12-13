<?php

$input = explode(' -> ', readline());
$users = [];
$count = 0;

while ($input[0] !== 'login') {
    [$name, $pass] = $input;
    if (!array_key_exists($name, $users)) {
        $users["$name"] = $pass;
    }
    $input = explode(' -> ', readline());
}

$input = explode(' -> ', readline());
while ($input[0] !== 'end') {
    [$name, $pass] = $input;
    if (array_key_exists($name, $users) && $pass === $users["$name"]) {
        echo $name . ': logged in successfully' . PHP_EOL;
    } else {
        echo $name . ': login failed' . PHP_EOL;
        $count++;
    }
    $input = explode(' -> ', readline());
}

echo 'unsuccessful login attempts: '.$count;