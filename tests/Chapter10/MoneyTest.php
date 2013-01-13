<?php

namespace Chapter10;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $this->assertTrue($dollar->equals(Money::dollar(5)));
        $this->assertFalse($dollar->equals(Money::dollar(6)));

        $franc = Money::franc(5);
        $this->assertTrue($franc->equals(Money::franc(5)));
        $this->assertFalse($franc->equals(Money::franc(6)));

        $this->assertFalse($dollar->equals($franc));
    }

    public function testCurrency()
    {
        $dollar = Money::dollar(1);
        $this->assertEquals('USD',$dollar->currency());

        $franc = Money::franc(1);
        $this->assertEquals('CHF',$franc->currency());
    }

    public function testDifferentClassEquality()
    {
        $money = new Money(1,'CHF');
        $this->assertTrue($money->equals(new Franc(1,'CHF')));
    }
}
