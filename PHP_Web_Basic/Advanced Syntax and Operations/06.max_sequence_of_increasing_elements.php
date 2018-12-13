<?php

$input = explode(' ', readline());
$length = count($input);
max_inc_sequence($input, $length);

function max_inc_sequence($numbers, $length) {
    $cnt_curr_seq = 0;
    $start_curr_seq = 0;
    $cnt_max_seq = 0;
    $start_max_seq = 0;

    for ($i = 1; $i < $length; $i++) {
        if ($numbers[$i] - $numbers[$i - 1] >= 1) {
            $cnt_curr_seq++;
            $start_curr_seq = $i - $cnt_curr_seq;
            if ($cnt_curr_seq > $cnt_max_seq) {
                $cnt_max_seq = $cnt_curr_seq;
                $start_max_seq = $start_curr_seq;
            }
        } else {
            $cnt_curr_seq = 0;
        }
    }

    for ($y = $start_max_seq; $y <= ($start_max_seq + $cnt_max_seq) ; $y++) {
        echo $numbers[$y] . ' ';
    }
}