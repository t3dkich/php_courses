<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 22:01
 */

class Ferrari implements IFerrari
{
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
        return "$this->model/{$this->pressBrake()}/{$this->pressGas()}/$this->driver";
    }
}