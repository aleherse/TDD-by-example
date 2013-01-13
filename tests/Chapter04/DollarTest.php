<?php

namespace Chapter04;


class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);

        $this->assertEquals(new Dollar(10), $dollar->times(2));
        $this->assertEquals(new Dollar(15), $dollar->times(3));
    }

    public function testEquality()
    {
        $dollar = new Dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5)));
        $this->assertFalse($dollar->equals(new Dollar(6)));
    }

}
