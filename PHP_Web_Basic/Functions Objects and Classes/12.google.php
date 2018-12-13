<?php

class Company {
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
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
    /**
     * @var string
     */
    private $department;
    /**
     * @var float
     */
    private $salary;

    /**
     * Company constructor.
     * @param string $name
     * @param string $department
     * @param float $salary
     */
    public function __construct(string $name, string $department, float $salary)
    {
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }


}

class Pokemon {
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $type;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}

class Parents {
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $birthday;

    /**
     * Parents constructor.
     * @param string $name
     * @param string $birthday
     */
    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
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
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }
}

class Children {
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $birthday;

    /**
     * Children constructor.
     * @param string $name
     * @param string $birthday
     */
    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
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
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }
}

class Car {
    /**
     * @var string
     */
    private $model;
    /**
     * @var int
     */
    private $speed;

    /**
     * Car constructor.
     * @param string $model
     * @param int $speed
     */
    public function __construct(string $model, int $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }
}

class Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var Company
     */
    private $company;
    /**
     * @var Car
     */
    private $car;
    /**
     * @var array
     */
    private $parents;
    /**
     * @var array
     */
    private $children;
    /**
     * @var array
     */
    private $pokemon;

    /**
     * Person1 constructor.
     * @param string $name
     * @param Company
     * @param Car
     * @param array
     * @param array
     * @param array
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->parents = [];
        $this->children = [];
        $this->pokemon = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @return array
     */
    public function getParents(): array
    {
        return $this->parents;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @return array
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @param Car $car
     */
    public function setCar(Car $car): void
    {
        $this->car = $car;
    }

    /**
     * @param Parents
     */
    public function setParents(Parents $parents): void
    {
        $this->parents[] = $parents;
    }

    /**
     * @param Children
     */
    public function setChildren(Children $children): void
    {
        $this->children[] = $children;
    }

    /**
     * @param Pokemon
     */
    public function setPokemon(Pokemon $pokemon): void
    {
        $this->pokemon[] = $pokemon;
    }

    public function __toString()
    {
        $output = $this->name.PHP_EOL;
        $output .= 'Company:'.PHP_EOL;
        if (isset($this->company)) {
            $output .= $this->company->getName().' '.$this->company->getDepartment().' '.round($this->company->getSalary(), 2).PHP_EOL;
        }
        $output .= 'Car:'.PHP_EOL;
        if (isset($this->car)) {
            $output .= $this->car->getModel().' '.$this->car->getSpeed().PHP_EOL;
        }
        $output .= 'Pokemon:'.PHP_EOL;
        if (count($this->pokemon) > 0) {
            foreach ($this->pokemon as $pokemon) {
                $output .= $pokemon->getName().' '.$pokemon->getType().PHP_EOL;
            }
        }
        $output .= 'Parents:'.PHP_EOL;
        if (count($this->parents) > 0) {
            foreach ($this->parents as $parent) {
                $output .= $parent->getName().' '.$parent->getBirthday().PHP_EOL;
            }
        }
        $output .= 'Children:'.PHP_EOL;
        if (count($this->children) > 0) {
            foreach ($this->children as $child) {
                $output .= $child->getName().' '.$child->getBirthday().PHP_EOL;
            }
        }
        return $output;
    }
}

$peopleList = [];
$input = readline();

while ($input !== 'End') {
    $input = explode(' ', $input);
    if (count($input) === 5) {
        [$personName, $typeClass, $className, $department, $salary] = $input;
        if (!array_key_exists($personName, $peopleList)) {
            $peopleList[$personName] = new Person1($personName);
        }
        $peopleList[$personName]->setCompany(new Company($className, $department, floatval($salary)));
    } else {
        [$personName, $typeClass, $className, $classValue] = $input;
        if (!array_key_exists($personName, $peopleList)) {
            $peopleList[$personName] = new Person1($personName);
        }
        switch ($typeClass) {
            case 'pokemon':
                $peopleList[$personName]->setPokemon(new Pokemon($className, $classValue));
                break;
            case 'parents':
                $peopleList[$personName]->setParents(new Parents($className, $classValue));
                break;
            case 'children':
                $peopleList[$personName]->setChildren(new Children($className, $classValue));
                break;
            case 'car':
                $peopleList[$personName]->setCar(new Car($className, $classValue));
                break;
        }
    }
    $input = readline();
}
$input = readline();

echo $peopleList[$input];

