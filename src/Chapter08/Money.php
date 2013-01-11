<?php

namespace Chapter08;

abstract class Money
{
    protected $amount;

    private function __construct($amount)
    {
        $this->amount = $amount;
    }

    static public function dollar($amount)
    {
        return new Dollar($amount);
    }

    static public function franc($amount)
    {
        return new Franc($amount);
    }

    public function equals(Money $money)
    {
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    abstract public function times($multiplier);
}
