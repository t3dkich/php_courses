<?php

/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 18/10/2018
 * Time: 22:47
 */

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $money;

    /**
     * @var array
     */
    private $products;

    /**
     * Person1 constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->products = [];
    }

    /**
     * @param string $name
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception('Name cannot be empty'.PHP_EOL);
        }
        $this->name = $name;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    public function setMoney(float $money): void
    {
        if ($money < 0) {
            throw new Exception('Money cannot be negative'.PHP_EOL);
        }
        $this->money = $money;
    }

    public function buyProduct($product, $price) {
        if ($price > $this->money) {
            throw new Exception("$this->name can't afford $product".PHP_EOL);
        }
        $this->money -= $price;
        $this->products[] = $product;
        echo "$this->name bought $product".PHP_EOL;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}

/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 18/10/2018
 * Time: 22:52
 */

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     * @throws Exception
     */
    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    /**
     * @param string $name
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception('Name cannot be empty'.PHP_EOL);
        }
        $this->name = $name;
    }

    /**
     * @param float $cost
     * @throws Exception
     */
    public function setCost(float $cost): void
    {
        if ($cost < 0) {
            throw new Exception('Cost cannot be negative'.PHP_EOL);
        }
        $this->cost = $cost;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

}
$peopleInput = preg_split('/[;=]/', readline(), -1, PREG_SPLIT_NO_EMPTY);
$productInput = preg_split('/[;=]/', readline(), -1, PREG_SPLIT_NO_EMPTY);

/** @var Person1[] $people */
$people = [];
/** @var Product[] $products */
$products = [];

for ($i = 0; $i < count($peopleInput) - 1; $i+=2) {
    $name = $peopleInput[$i];
    $money = $peopleInput[$i + 1];
    if (!array_key_exists($name, $people)) {
        try {
            $people[$name] = new Person1($name, $money);
        } catch (Exception $e) {
            echo $e->getMessage();
            return;
        }
    }
}

for ($i = 0; $i < count($productInput) - 1; $i+=2) {
    $name = $productInput[$i];
    $cost = $productInput[$i + 1];
    if (!array_key_exists($name, $products)) {
        try {
            $products[$name] = new Product($name, $cost);
        } catch (Exception $e) {
            echo $e->getMessage();
            return;
        }
    }
}

while ($input = readline()) {
    if ($input === 'END') {
        break;
    }

    [$name, $product] = explode(' ', $input);

    if (!array_key_exists($name, $people)) {
        return;
    }

    $productPrice = $products[$product]->getCost();

    try {
        $people[$name]->buyProduct($product, $productPrice);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

foreach ($people as $name=>$person) {
    $items = implode(',', $person->getProducts());
    if (empty($items)) {
        echo "$name - Nothing bought".PHP_EOL;
        continue;
    }
    echo "$name - $items".PHP_EOL;
}