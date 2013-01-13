<?php

namespace Chapter14;

interface Expression
{
    public function reduce(Bank $bank, $to);
}