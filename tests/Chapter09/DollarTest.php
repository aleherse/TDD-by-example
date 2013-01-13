<?php

namespace Chapter09;

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = Money::dollar(5);

        $this->assertEquals(Money::dollar(10), $dollar->times(2));
        $this->assertEquals(Money::dollar(15), $dollar->times(3));
    }
}
