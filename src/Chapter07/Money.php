<?php

namespace Chapter07;

class Money
{
    protected $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function equals(Money $money)
    {
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}
