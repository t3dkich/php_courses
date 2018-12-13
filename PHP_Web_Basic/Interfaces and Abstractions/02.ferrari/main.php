<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 22:07
 */

interface IFerrari
{
    public function pressBrake();

    public function pressGas();
}

class Ferrari implements IFerrari
{
    /**
     * @var int
     */
    private static $objNum = 0;

    /**
     * @var string
     */
    private $driver;

    /**
     * @var string
     */
    private $model;

    /**
     * Ferrari constructor.
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->driver = $driver;
        $this->model = '488-Spider';
        self::$objNum++;
    }

    public static function forUrl(string $str, string $rep = '-')
    {
        $str = str_replace(' ',$rep, $str);
        return strtolower($str);
    }

    public function pressBrake()
    {
        return 'Brakes!';
    }

    public function pressGas()
    {
        return 'Zadu6avam sA!';
    }

    public function __toString()
    {
        $instance = self::$objNum;
        $name = self::forUrl($this->driver);
        return "$this->model/{$this->pressBrake()}/{$this->pressGas()}/$name/ inst. $instance\n";
    }
}

$driver = new Ferrari('Bat Giorgi');
echo $driver;
$driver1 = new Ferrari('Dinko');
echo $driver1;

