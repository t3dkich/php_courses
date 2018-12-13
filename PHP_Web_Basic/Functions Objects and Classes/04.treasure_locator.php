<?php

class Point
{
    private $x;
    private $y;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Point constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

}

$coordinates = array_map('floatval', explode(', ', readline()));

for ($i = 0; $i < count($coordinates); $i += 2) {
    $point = new Point($coordinates[$i], $coordinates[$i + 1]);
    if ($point->getX() >= 1 && $point->getX() <= 3
        && $point->getY() >= 1 && $point->getY() <= 3) {
        echo 'Tuvalu' . PHP_EOL;
    } else if ($point->getX() >= 8 && $point->getX() <= 9
        && $point->getY() >= 0 && $point->getY() <= 1) {
        echo 'Tokelau' . PHP_EOL;
    } else if ($point->getX() >= 5 && $point->getX() <= 7
        && $point->getY() >= 3 && $point->getY() <= 6) {
        echo 'Samoa'.PHP_EOL;
    } else if ($point->getX() >= 0 && $point->getX() <= 2
        && $point->getY() >= 6 && $point->getY() <= 8) {
        echo 'Tonga'.PHP_EOL;
    } else if ($point->getX() >= 4 && $point->getX() <= 9
        && $point->getY() >= 7 && $point->getY() <= 8) {
        echo 'Cook'.PHP_EOL;
    } else {
        echo 'On the bottom of the ocean' . PHP_EOL;
    }
}