<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:01
 */

abstract class Animal
{
    protected $animalName;
    protected $animalType;
    protected $animalWeight;
    protected $footEaten;

    /**
     * Animal constructor.
     * @param $animalName
     * @param $animalType
     * @param $animalWeight
     * @param $footEaten
     */
    public function __construct($animalName, $animalType, $animalWeight)
    {
        $this->animalName = $animalName;
        $this->animalType = $animalType;
        $this->animalWeight = $animalWeight;
        $this->footEaten = 0;
    }

    /**
     * @return mixed
     */
    public function getAnimalName()
    {
        return $this->animalName;
    }

    /**
     * @param mixed $animalName
     */
    public function setAnimalName($animalName): void
    {
        $this->animalName = $animalName;
    }

    /**
     * @return mixed
     */
    public function getAnimalType()
    {
        return $this->animalType;
    }

    /**
     * @param mixed $animalType
     */
    public function setAnimalType($animalType): void
    {
        $this->animalType = $animalType;
    }

    /**
     * @return mixed
     */
    public function getAnimalWeight()
    {
        return $this->animalWeight;
    }

    /**
     * @param mixed $animalWeight
     */
    public function setAnimalWeight($animalWeight): void
    {
        $this->animalWeight = $animalWeight;
    }

    /**
     * @return mixed
     */
    public function getFootEaten()
    {
        return $this->footEaten;
    }

    /**
     * @param mixed $footEaten
     */
    public function setFootEaten($footEaten): void
    {
        $this->footEaten += $footEaten;
    }

    abstract public function makeSound();
    abstract public function eat(Food $food);

}