<?php

namespace Chapter01;

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);

        $this->assertEquals(10, $dollar->amount);
    }
}
