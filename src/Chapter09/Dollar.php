<?php

namespace Chapter09;

class Dollar extends Money
{
    public function times($multiplier)
    {
        return Money::dollar($this->amount * $multiplier);
    }
}