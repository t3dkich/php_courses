<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:24
 */

class Zebra extends Mammal
{

    public function makeSound()
    {
        echo 'Zs'.PHP_EOL;
    }

    public function eat(Food $food)
    {

    }
}