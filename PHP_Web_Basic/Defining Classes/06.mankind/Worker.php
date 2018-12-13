<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 03:27
 */

class Worker extends Human
{
    /**
     * @var float
     */
    private $weeklySalary;

    /**
     * @var int
     */
    private $hoursPerDay;

    public function __construct(string $firstName, string $lastName, float $weeklySalary, int $hoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setWeeklySalary($weeklySalary);
        $this->setHoursPerDay($hoursPerDay);
    }

    public function setLastName(string $lastName): void
    {
        if (ctype_lower($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: $lastName");
        }
        if (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: $lastName");
        }
        $this->lastName = $lastName;
    }

    /**
     * @return float
     */
    private function hourlySalary() : float
    {
        return $this->getWeeklySalary() / ($this->getHoursPerDay() * 7);
    }

    /**
     * @return float
     */
    public function getWeeklySalary(): float
    {
        return $this->weeklySalary;
    }

    /**
     * @param float $weeklySalary
     */
    public function setWeeklySalary(float $weeklySalary): void
    {
        $this->weeklySalary = $weeklySalary;
    }

    /**
     * @return int
     */
    public function getHoursPerDay(): int
    {
        return $this->hoursPerDay;
    }

    /**
     * @param int $hoursPerDay
     */
    public function setHoursPerDay(int $hoursPerDay): void
    {
        $this->hoursPerDay = $hoursPerDay;
    }

    public function __toString()
    {
        $salaryPerHour = number_format($this->hourlySalary(), 2, '.', '');
        $weekly = number_format($this->weeklySalary, 2, '.', '');
        $hours = number_format($this->hoursPerDay, 2, '.', '');
        return "First Name: $this->firstName\nLast Name: $this->lastName\nWeekly Salary: $weekly\nHours per day: $hours\nSalary per hour: $salaryPerHour\n";
    }
}