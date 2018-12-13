<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:39
 */

class Tiger extends Felime
{

    public function makeSound()
    {
        echo 'ROAAR!!!'.PHP_EOL;
    }

    /**
     * @param Food $food
     * @throws ReflectionException
     */
    public function eat(Food $food)
    {
        $foodName = new ReflectionClass($food);

        if ('Meat' == $foodName->getName()) {
            $this->setFootEaten($food->getQuantity());
        } else {
            throw new Exception("Tigers are not eating that type of food!");
        }
    }
}