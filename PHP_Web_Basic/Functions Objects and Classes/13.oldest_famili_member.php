<?php

class Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * Person1 constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
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
    public function getAge(): int
    {
        return $this->age;
    }

}

class Family {
    private $members = [];

    function addMember(Person1 $member) {
        $this->members[] = $member;
    }

    function getOldestMember() {
        $members = $this->members;
        usort($members, function (Person1 $one, Person1 $two){
           return $two->getAge() <=> $one->getAge();
        });
        return $members[0];
    }
}

$input = readline();
$family = new Family();

for ($i = 0; $i < $input; $i++) {
    [$name, $age] = explode(' ', readline());
    $family->addMember(new Person1($name, intval($age)));
}

$oldest = $family->getOldestMember();
$name = $oldest->getName();
$age = $oldest->getAge();
echo $name.' '.$age;