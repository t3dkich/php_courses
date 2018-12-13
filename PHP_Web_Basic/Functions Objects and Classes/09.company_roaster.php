<?php

class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $department
     * @param $email
     * @param $age
     */
    public function __construct($name, $salary, $position, $department, $email = 'n/a', $age = -1)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }
}

class Department
{
    private $name;
    private $employees;

    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * Department constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->employees = [];
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function totalSalary()
    {
        $total = 0;
        foreach ($this->employees as $employee) {
            $total += intval($employee->getSalary());
        }
        return $total / count($this->employees);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}

$num = readline();
$departments = [];

for ($i = 0; $i < $num; $i++) {
    $input = explode(' ', readline());

    if (count($input) === 4) {
        $employee = new Employee($input[0], $input[1], $input[2], $input[3]);
    } else if (count($input) === 5) {
        if (is_numeric($input[4])) {
            $employee = new Employee($input[0], $input[1], $input[2], $input[3], 'n/a', $input[4]);
        } else {
            $employee = new Employee($input[0], $input[1], $input[2], $input[3], $input[4]);
        }
    } else {
        $employee = new Employee($input[0], $input[1], $input[2], $input[3], $input[4], $input[5]);
    }

    if (!array_key_exists($input[3], $departments)) {
        $department = new Department($input[3]);
        $departments[$input[3]] = $department;
    }
    $departments[$input[3]]->addEmployee($employee);
}

usort($departments, function (Department $one, Department $two) {
    return $two->totalSalary() <=> $one->totalSalary();
});
$temp = $departments[0]->getEmployees();
usort($temp, function (Employee $one, Employee $two) {
    return $two->getSalary() <=> $one->getSalary();

});

echo 'Highest Average Salary: ' . $departments[0]->getName() . PHP_EOL;
foreach ($temp as $employee) {
    echo $employee->getName() . ' ' . number_format($employee->getSalary(), 2)  . ' ' . $employee->getEmail()
        . ' ' . $employee->getAge() . PHP_EOL;
}