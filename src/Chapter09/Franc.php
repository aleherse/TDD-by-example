<?php

namespace Chapter09;

class Franc extends Money
{
    public function times($multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}
