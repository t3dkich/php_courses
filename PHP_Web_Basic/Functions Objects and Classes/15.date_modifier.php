<?php

$firstDate = implode('-' ,explode(' ', readline())) ;
$secondDate = implode('-' ,explode(' ', readline())) ;

$earlier = new DateTime($firstDate);
$later = new DateTime($secondDate);

$diff = $later->diff($earlier)->format("%a");

echo $diff;