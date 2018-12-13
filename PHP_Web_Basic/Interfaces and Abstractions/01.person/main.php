<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 19:57
 */
interface IPerson
{
    public function setName(string $name);
    public function setAge(int $age);
}

interface Birthable
{
    public function setBirthdate(string $birthDay);
}

interface Identifiable
{
    public function setId(string $id);
}

class Citizen implements IPerson,Identifiable,Birthable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $birthDay;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthDay
     */
    public function __construct(string $name, int $age, string $id, string $birthDay)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthDay);
    }

    /**
     * @param string $birthDay
     */
    public function setBirthdate(string $birthDay)
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return "$this->name\n$this->age\n$this->id\n$this->birthDay";
    }
}

$citizen = new Citizen(readline(), intval(readline()),readline(),readline());
echo $citizen;