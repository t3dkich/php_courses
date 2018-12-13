<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 20/10/2018
 * Time: 00:42
 */

interface Identification
{
    public function setId(string $id);
}

interface Birthday
{
    public function setBirthday(DateTime $birthday);
}

class Robot implements Identification
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * Citizen constructor.
     * @param string $name
     * @param string $id
     */
    public function __construct(string $name, string $id)
    {
        $this->setName($name);
        $this->setId($id);
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
}

class Citizen implements Identification, Birthday
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
     * @var DateTime
     */
    private $birthday;

    /**
     * @return DateTime
     */
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    /**
     * @param DateTime $birthday
     */
    public function setBirthday(DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     */
    public function __construct(string $name, int $age, string $id, DateTime $birthday)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthday($birthday);
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

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

}

class Pet implements Birthday {
    /**
     * @var string
     */
    private $name;

    /**
     * @var DateTime
     */
    private $birthday;

    /**
     * Pet constructor.
     * @param string $name
     * @param DateTime $birthday
     */
    public function __construct(string $name, DateTime $birthday)
    {
        $this->setName($name);
        $this->setBirthday($birthday);
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
     * @return DateTime
     */
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    /**
     * @param DateTime $birthday
     */
    public function setBirthday(DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

}

/** @var Citizen[]|Robot[] $ids */
$ids = [];
$input = readline();
while ($input !== 'End') {
    $input = explode(' ', $input);
    if (count($input) === 5) {
        $ids[] = new Citizen($input[1], intval($input[2]), $input[3],
            (DateTime::createFromFormat('d/m/Y', $input[4])));

    } else {
        if ($input[0] === 'Robot') {
            $ids[] = new Robot($input[1], $input[2]);
        } else {
            $ids[] = new Pet($input[1],
                (DateTime::createFromFormat('d/m/Y', $input[2])));

        }
    }
    $input = readline();
}

$input = readline();
foreach ($ids as $obj) {
    try{
        $clName = new ReflectionClass($obj);
        $clName = $clName->getName();
        if ($clName === 'Citizen' || $clName === 'Pet') {
            $obj = $obj->getBirthday();
            if ($obj->format('Y') === $input) {
                echo $obj->format('d/m/Y') . PHP_EOL;
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


