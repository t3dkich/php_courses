<?php

$input = array_map('intval',explode(' ', readline()));
$values = array_count_values($input);
arsort($values);
echo array_keys($values)[0];