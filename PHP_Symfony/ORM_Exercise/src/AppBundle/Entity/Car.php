<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="cars")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="make", type="string", length=255)
     */
    private $make;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="traveledDistance", type="bigint")
     */
    private $traveledDistance;

    /**
     * @var ArrayCollection|Part[]
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Part")
     * @ORM\JoinTable(name="cars_parts",
     *     joinColumns={@ORM\JoinColumn(name="car_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="part_id", referencedColumnName="id")})
     */
    private $parts;

    public function __construct()
    {
        $this->parts = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set make
     *
     * @param string $make
     *
     * @return Car
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set traveledDistance
     *
     * @param integer $traveledDistance
     *
     * @return Car
     */
    public function setTraveledDistance($traveledDistance)
    {
        $this->traveledDistance = $traveledDistance;

        return $this;
    }

    /**
     * Get traveledDistance
     *
     * @return int
     */
    public function getTraveledDistance()
    {
        return $this->traveledDistance;
    }

    /**
     * @return Part[]|ArrayCollection
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * @param Part[]|ArrayCollection $parts
     */
    public function setParts($parts)
    {
        $this->parts = $parts;
    }


}

