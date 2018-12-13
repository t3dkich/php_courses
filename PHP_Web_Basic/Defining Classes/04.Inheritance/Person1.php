<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 18/10/2018
 * Time: 23:59
 */

class Person1
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $age;

    /**
     * Person1 constructor.
     * @param string $name
     * @param int $age
     * @throws Exception
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     * @throws Exception
     */
    protected function setName(string $name): void
    {
        if (strlen($name) < 3) {
            throw new Exception("Name's length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    protected function setAge(int $age): void
    {
        if ($age < 0) {
            throw new Exception('Age must be positive!');
        }
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge1(): int
    {
        return $this->age;
    }


}