<?php

$m = '11.2456';
$op = explode('.', $m);
$n = floatval('0.'.$op[1]);
echo $n;

//function travelTime($fuel, $speed, $fuelEconomy, $toTravelDist)
//{
//    $possibleDist = floatval(100 / ($fuelEconomy / $fuel));
//    $actualDist = min($possibleDist, $toTravelDist);
//    $travelTime = floatval(1 / $speed * $actualDist);
//    $hours = 0;
//    if ($travelTime >= 1) {
//        $hours = floor($travelTime);
//    }
//    $minutes = ($travelTime % 1) * 60;
//    $fuel -= ($fuelEconomy / 100) * $actualDist;
//    return [intval($hours), intval($minutes), $actualDist, $fuel];
//}
//
//$h = 0;
//$m = 0;
//$distans = 0;
//$fuel1 = 50;
//
//[$hours, $minutes, $dist, $fuel] = travelTime($fuel1, 100, 20, 100);
//
//$h += $hours;
//$m += $minutes;
//$distans += $dist;
//$fuel1 = $fuel;
//
//[$hours, $minutes, $dist, $fuel] = travelTime($fuel1, 100, 20, 126);
//
//$h += $hours;
//$m += $minutes;
//$distans += $dist;
//$fuel1 = $fuel;