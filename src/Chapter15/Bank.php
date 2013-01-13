<?php

namespace Chapter15;

class Bank
{
    private $rates;

    public function addRate($from, $to, $rate)
    {
        $this->rates[$from][$to] = $rate;
    }

    public function reduce(Expression $source, $to)
    {
        return $source->reduce($this, $to);
    }

    public function rate($from, $to)
    {
        if(isset($this->rates[$from][$to]))
            return $this->rates[$from][$to];
        else
            return 1;
    }
}
