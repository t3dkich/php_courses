<?php

class DecimalNumber
{
    /**
     * @var string
     */
    private $str;

    /**
     * DecimalNumber constructor.
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function reverse()
    {
        return strrev($this->str);
    }

}

$input = new DecimalNumber(readline());
echo $input->reverse();