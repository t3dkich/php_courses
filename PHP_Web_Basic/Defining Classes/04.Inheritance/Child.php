<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 00:06
 */

class Child extends Person1
{
    protected $age;

    public function __construct($name, $age)
    {
        parent::setName($name);
        $this->setAge($age);
    }

    /**
     * @param mixed $age
     * @throws Exception
     */
    public function setAge($age): void
    {
        if ($age > 15) {
            throw new Exception("age bigger");
        }
        $this->age = $age;
    }


}