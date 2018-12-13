<?php
$input = explode(' ', readline());
$phone_book = [];
while ($input[0] !== 'END') {

    switch ($input[0]) {
        case 'A':
            $phone_book["$input[1]"] = $input[2];
            break;
        case 'S':
            if (array_key_exists($input[1], $phone_book)) {
                $temp = $phone_book["$input[1]"];
                echo "$input[1] -> $temp".PHP_EOL;
                unset($phone_book["$input[1]"]);
            } else {
                echo "Contact $input[1] does not exist.".PHP_EOL;
            }
            break;
        case 'ListAll':
            ksort($phone_book);
            foreach ($phone_book as $x => $contact) {
                echo "$x -> $contact".PHP_EOL;
            }
            break;
    }
    $input = explode(' ', readline());
}
