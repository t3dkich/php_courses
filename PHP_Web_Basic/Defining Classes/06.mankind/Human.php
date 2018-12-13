<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 03:14
 */

class Human
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    public function setFirstName(string $firstName): void
    {
        if (ctype_lower($firstName[0])) {
            throw new Exception("Expected upper case letter!Argument: $firstName");
        }
        if (strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: $firstName");
        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    public function setLastName(string $lastName): void
    {
        if (ctype_lower($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: $lastName");
        }
        if (strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: $lastName");
        }
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "First Name: $this->firstName\nLast Name: $this->lastName\n";
    }
}