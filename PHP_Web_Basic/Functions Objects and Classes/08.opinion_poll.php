<?php

class Person
{
    /**
     * @var string
     */
    private $name;

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
}

$num = readline();

for ($i = 0; $i < $num; $i++) {
    [$name, $age] = explode(' ', readline());
    if ($age > 30) {
        $people[] = new Person1($name, intval($age));
    }
}

usort($people, function (Person1 $p1, Person1 $p2) {
   return $p1->getName() <=> $p2->getName();
});

foreach ($people as $person) {
    $name = $person->getName();
    $age = $person->getAge();
    echo "$name - $age" . PHP_EOL;
}
