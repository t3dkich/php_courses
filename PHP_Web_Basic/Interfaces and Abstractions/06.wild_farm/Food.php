<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:06
 */

abstract class Food
{
    protected $quantity;

    /**
     * Food constructor.
     * @param $quantity
     */
    protected function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }


}