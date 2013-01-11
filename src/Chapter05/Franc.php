<?php

namespace Chapter05;

class Franc
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $Franc)
    {
        return $this->amount == $Franc->amount;
    }
}
