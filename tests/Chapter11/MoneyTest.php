<?php

namespace Chapter11;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $franc = Money::franc(5);

        $this->assertTrue($dollar->equals(Money::dollar(5)));
        $this->assertFalse($dollar->equals(Money::dollar(6)));
        $this->assertFalse($dollar->equals($franc));
    }

    public function testCurrency()
    {
        $dollar = Money::dollar(1);
        $this->assertEquals('USD',$dollar->currency());

        $franc = Money::franc(1);
        $this->assertEquals('CHF',$franc->currency());
    }

    public function testMultiplication()
    {
        $dollar = Money::dollar(5);
        $this->assertEquals(new Money(10,'USD'), $dollar->times(2));
        $this->assertEquals(new Money(15,'USD'), $dollar->times(3));
    }

}
