<?php

namespace Chapter04;

class Dollar
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $Dollar)
    {
        return $this->amount == $Dollar->amount;
    }
}
