<?php

class Point {
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

function point_checker (Point $one, Point $two) {
    if ($one->getX() === $two->getX()
    || $one->getY() === $two->getY()) {
        $temp = 'valid';
    } else {
        $temp = 'invalid';
    }
    return "{{$one->getX()}, {$one->getY()}} to {{$two->getX()}, {$two->getY()}} is $temp" . PHP_EOL;
}

$points = array_map('intval', explode(', ', readline()));
$pointOne = new Point($points[0], $points[1]);
$pointTwo = new Point($points[2], $points[3]);

echo point_checker($pointOne, new Point(0,0));
echo point_checker($pointTwo, new Point(0,0));
echo point_checker($pointOne, $pointTwo);

