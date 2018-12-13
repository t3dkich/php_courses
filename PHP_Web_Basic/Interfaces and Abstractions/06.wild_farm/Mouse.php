<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:11
 */

class Mouse extends Mammal
{
    public function makeSound()
    {
        echo 'SQUEEEAAAK!'.PHP_EOL;
    }

    public function eat(Food $food)
    {

    }
}