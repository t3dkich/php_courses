<?php

$peopleCount = intval(readline());
$packageType = readline();

if ($peopleCount < 51) {
    $peopleCountPrice = 2500;
    $place = 'Small Hall';
} else if ($peopleCount > 50 && $peopleCount < 101) {
    $peopleCountPrice = 5000;
    $place = 'Terrace';
} else if ($peopleCount > 100 && $peopleCount < 121) {
    $peopleCountPrice = 7500;
    $place = 'Great Hall';
} else {
    echo 'We do not have an appropriate hall.';
    return;
}

switch ($packageType) {
    case 'Normal':
        $price = ($peopleCountPrice + 500) * 0.95;
        break;
    case 'Gold':
        $price = ($peopleCountPrice + 750) * 0.9;
        break;
    case 'Platinum':
        $price = ($peopleCountPrice + 1000) * 0.85;
        break;
}

$pricePerPerson = $price / $peopleCount;

echo "We can offer you the $place".PHP_EOL;
printf("The price per person is %s\$", round($pricePerPerson, 2));