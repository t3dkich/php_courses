<?php

$text = readline();
[$letter, $count] = explode(' ' ,readline());
$index = 0;
for ($i = 0; $i < $count; $i++) {
    $position = strpos($text, $letter, $index);
    $index = $position + 1;
    if ($position === false) {
        echo 'Find the letter yourself!';
        return;
    }
}

echo $position;