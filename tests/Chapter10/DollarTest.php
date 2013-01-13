<?php

namespace Chapter10;

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = Money::dollar(5);
        $this->assertEquals(new Money(10,'USD'), $dollar->times(2));
        $this->assertEquals(new Money(15,'USD'), $dollar->times(3));
    }
}
