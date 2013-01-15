<?php

namespace Chapter16;

class Sum implements Expression
{
    /** @var \Chapter16\Expression $augend */
    public $augend;

    /** @var \Chapter16\Expression $addend */
    public $addend;

    public function __construct(Expression $augend, Expression $addend)
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
        return new Sum($this, $addend);
    }

    public function times($multiplier)
    {
        return new Sum(
            $this->augend->times($multiplier),
            $this->addend->times($multiplier)
        );
    }
}
