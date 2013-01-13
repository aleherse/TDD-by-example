<?php

namespace Chapter15;

interface Expression
{
    public function reduce(Bank $bank, $to);
    public function plus(Expression $addend);
}