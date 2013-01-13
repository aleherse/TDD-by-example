<?php

namespace Chapter11;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    static public function dollar($amount)
    {
        return new Money($amount,'USD');
    }

    static public function franc($amount)
    {
        return new Money($amount,'CHF');
    }

    public function equals(Money $money)
    {
        return $this->amount == $money->amount && $this->currency == $money->currency;
    }

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency()
    {
        return $this->currency;
    }
}
