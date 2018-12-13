<?php

$month = readline();
switch ($month) {
    case 'January':
        $month = '01';
        break;
    case 'February':
        $month = '02';
        break;
    case 'March':
        $month = '03';
        break;
    case 'April':
        $month = '04';
        break;
    case 'May':
        $month = '05';
        break;
    case 'June':
        $month = '06';
        break;
    case 'July':
        $month = '07';
        break;
    case 'August':
        $month = '08';
        break;
    case 'September':
        $month = '09';
        break;
    case 'October':
        $month = '10';
        break;
    case 'November':
        $month = '11';
        break;
    case 'December':
        $month = '12';
        break;
}

$begin = new DateTime('2018-'.$month);
$end = new DateTime('2018-'.$month.'-'.$days);
$end = $end->modify('+1 day');
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval, $end);

foreach ($daterange as $date) {
    $sunday = date('w', strtotime($date->format("Y-m-d")));
    if ($sunday == 0) {
        $day = $date->format("d");
        if ($day[0] === '0') {
            $day = $day[1];
        }
        $month = $date->format('m');
        $year = $date->format('y');
        echo "$day".'rd'." $month, 20$year".PHP_EOL;
    } else {
        echo'';
    }
}
