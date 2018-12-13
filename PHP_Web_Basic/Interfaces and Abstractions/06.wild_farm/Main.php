<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:40
 */

spl_autoload_register();

class Main
{
    private const END = 'End';

    public function readDate() {
        $input = readline();
        while ($input != self::END) {
            $animalData = explode(' ', $input);
            $animal = AnimalFactory::getAnimal($animalData);

            $foodData = explode(' ', readline());
            $food = FoodFactory::getFood($foodData);

            $animal->makeSound();
            $animal->eat($food);

            echo $animal;

            $input = readline();
        }
    }
}

$main = new Main();
$main->readDate();