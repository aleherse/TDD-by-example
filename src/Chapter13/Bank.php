<?php

namespace Chapter13;

class Bank
{
    public function reduce(Expression $source, $to)
    {
        return $source->reduce($to);
    }
}
