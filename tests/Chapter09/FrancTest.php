<?php

namespace Chapter09;

class FrancTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $franc = Money::franc(5);

        $this->assertEquals(Money::franc(10), $franc->times(2));
        $this->assertEquals(Money::franc(15), $franc->times(3));
    }
}
