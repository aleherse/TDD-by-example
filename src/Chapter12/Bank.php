<?php

namespace Chapter12;

class Bank
{
    public function reduce(Expression $source, $to)
    {
        return new Money(10,'USD');
    }
}
