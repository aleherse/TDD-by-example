<?php

namespace Chapter10;

class FrancTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $franc = Money::franc(5);

        $this->assertEquals(new Money(10,'CHF'), $franc->times(2));
        $this->assertEquals(new Money(15,'CHF'), $franc->times(3));
    }
}
