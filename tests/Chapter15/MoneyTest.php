<?php

namespace Chapter15;

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

    public function testSimpleAddition()
    {
        $dollar = Money::dollar(5);
        $sum = $dollar->plus(Money::dollar(5));
        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');

        $this->assertEquals(Money::dollar(10), $reduced);
    }

    public function testPlusReturnsSum()
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);

        $this->assertEquals($five, $sum->augend);
        $this->assertEquals($five, $sum->addend);
    }

    public function testReduceSum()
    {
        $sum = new Sum(Money::dollar(3),Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, 'USD');

        $this->assertEquals(Money::dollar(7), $result);
    }

    public function testReduceMoney()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1),'USD');

        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testReduceMoneyDifferentCurrency()
    {
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce(Money::franc(2),'USD');

        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testIdentityRate()
    {
        $bank = new Bank();

        $this->assertEquals(1, $bank->rate('USD','USD'));
    }

    public function testMixedAddition()
    {
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();

        $bank->addRate('CHF','USD',2);
        $result = $bank->reduce($fiveBucks->plus($tenFrancs),'USD');

        $this->assertEquals(Money::dollar(10), $result);
    }
}
