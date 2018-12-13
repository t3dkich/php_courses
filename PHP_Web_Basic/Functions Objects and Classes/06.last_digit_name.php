<?php

class Number {
    /**
     * @var int
     */
    private $num;

    /**
     * Number constructor.
     * @param int $num
     */
    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function last_num() {
        $final = $this->num % 10;
        $output = [0=>'zero', 1=>'one', 2=>'two', 3=>'three', 4=>'four', 5=>'five', 6=>'six',
            7=>'seven', 8=>'eight', 9=>'nine'];
        return $output[$final];
    }
}

$num = new Number(intval(readline()));
echo $num->last_num();
