<?php

namespace Chapter08;

require_once(__DIR__.'/../../vendor/autoload.php');

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
}
