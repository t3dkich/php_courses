<?php

class Car
{
    /**
     * @var float
     */
    private $speed;
    /**
     * @var float
     */
    private $fuel;
    /**
     * @var float
     */
    private $fuelEconomy;

    /**
     * @var float
     */

    /**
     * Car constructor.
     * @param float $speed
     * @param float $fuel
     * @param float $fuelEconomy
     */
    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
    }

    /**
     * @return float
     */
    public function getFuel(): float
    {
        return $this->fuel;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @return float
     */
    public function getFuelEconomy(): float
    {
        return $this->fuelEconomy;
    }

    /**
     * @param float $fuel
     */
    public function setFuel(float $fuel): void
    {
        $this->fuel = $fuel;
    }


}

[$speed, $fuel, $fuelEconomy] = explode(' ', readline());

$car = new Car(floatval($speed), floatval($fuel), floatval($fuelEconomy));

$input = readline();
$distance = 0;
$time = ['hours' => 0, 'minutes' => 0];
while ($input !== 'END') {
    $input = explode(' ', $input);
    if (count($input) !== 1) {
        switch ($input[0]) {
            case 'Travel':
                $fuel = $car->getFuel();
                $speed = $car->getSpeed();
                $fuelEconomy = $car->getFuelEconomy();
                $toTravelDist = floatval($input[1]);
                if ($fuel > 0) {
                    [$hours, $minutes, $currentDist, $fuel] = travelTime($fuel, $speed, $fuelEconomy, $toTravelDist);
                    $time['hours'] += $hours;
                    $time['minutes'] += $minutes;
                    $distance += $currentDist;
                    $car->setFuel($fuel);
                }
                break;
            case 'Refuel':
                $fuel = max($car->getFuel(), 0);
                $car->setFuel($fuel + floatval($input[1]));
                break;
        }
    } else {
        switch ($input[0]) {
            case 'Distance':
                echo 'Total Distance: ' . number_format($distance, 1) . PHP_EOL;
                break;
            case 'Time':
                echo "Total Time: $time[hours] hours and $time[minutes] minutes" . PHP_EOL;
                break;
            case 'Fuel':
                echo "Fuel left: " . number_format(max($car->getFuel(),0), 1) . ' liters' . PHP_EOL;
                break;
        }

    }
    $input = readline();
}

function travelTime($fuel, $speed, $fuelEconomy, $toTravelDist)
{
    $possibleDist = floatval(100 / ($fuelEconomy / $fuel));
    $actualDist = min($possibleDist, $toTravelDist);
    $travelTime = floatval(1 / $speed * $actualDist);
    $hours = 0;
    $minutes = 0;
    if ($travelTime >= 1) {
        $hours = floor($travelTime);
    }
    $m = "$travelTime";
    $op = explode('.', $m);
    if (count($op) !== 1) {
        $n = floatval('0.' . $op[1]);
        $minutes = $n * 60;
    }
    $fuel -= ($fuelEconomy / 100) * $actualDist;
    return [intval($hours), intval($minutes), $actualDist, $fuel];


}


