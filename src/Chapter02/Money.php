<?php

namespace Chapter02;

class Money
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return $this->amount * $multiplier;
    }
}
