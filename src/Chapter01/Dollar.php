<?php

namespace Chapter01;

class Dollar
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        $this->amount *= $multiplier;
    }
}
