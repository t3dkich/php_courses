<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:37
 */

class Cat extends Felime
{
    private $breed;

    public function __construct($animalName, $animalType, $animalWeight, $livingRegion, $breed)
    {
        parent::__construct($animalName, $animalType, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }



    public function makeSound()
    {
        echo 'Meowwww'.PHP_EOL;
    }

    public function eat(Food $food)
    {
        $this->setFootEaten($food->getQuantity());
    }

    public function __toString()
    {
        return sprintf("%s[%s, %s, %s, %s, %s]\n",
            $this->getAnimalName(),
            $this->getAnimalType(),
            $this->getBreed(),
            $this->getAnimalWeight(),
            $this->getLivingRegion(),
            $this->getFootEaten());
    }
}