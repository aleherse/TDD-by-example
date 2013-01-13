<?php

namespace Chapter15;

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, $to)
    {
        $augend = $bank->reduce($this->augend,$to);
        $addend = $bank->reduce($this->addend,$to);

        return new Money($augend->amount + $addend->amount, $to);
    }

    public function plus(Expression $addend)
    {
        return null;
    }
}
