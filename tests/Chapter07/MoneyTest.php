<?php

namespace Chapter07;

require_once(__DIR__.'/../../vendor/autoload.php');

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    public function testEquality()
    {
        $dollar = new Dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5)));
        $this->assertFalse($dollar->equals(new Dollar(6)));

        $franc = new Franc(5);
        $this->assertTrue($franc->equals(new Franc(5)));
        $this->assertFalse($franc->equals(new Franc(6)));

        $this->assertFalse($dollar->equals($franc));
    }
}
