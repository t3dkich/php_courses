<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 19/10/2018
 * Time: 00:51
 */

class Book
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var float
     */
    protected $price;

    /**
     * Book constructor.
     * @param string $name
     * @param string $title
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $name, string $title, float $price)
    {
        $this->setName($name);
        $this->setTitle($title);
        $this->setPrice($price);
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
     * @throws Exception
     */
    public function setName(string $name): void
    {
        [$first, $second] = explode( ' ',$name);
        if (is_numeric($second[0])) {
            throw new Exception('Author not valid!');
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     */
    public function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    public function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }


}