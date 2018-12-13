<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 29/10/2018
 * Time: 00:03
 */

abstract class Mammal extends Animal
{
    protected $livingRegion;
    public function __construct($animalName, $animalType, $animalWeight, $livingRegion)
    {
        parent::__construct($animalName, $animalType, $animalWeight);
        $this->livingRegion = $livingRegion;
    }

    /**
     * @return mixed
     */
    public function getLivingRegion()
    {
        return $this->livingRegion;
    }

    /**
     * @param mixed $livingRegion
     */
    public function setLivingRegion($livingRegion): void
    {
        $this->livingRegion = $livingRegion;
    }

    public function __toString()
    {
        return sprintf("%s[%s, %s, %s, %s]\n",
            $this->getAnimalName(),
            $this->getAnimalType(),
            $this->getAnimalWeight(),
            $this->getLivingRegion(),
            $this->getFootEaten());
    }
}