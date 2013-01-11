<?php

namespace Chapter03;

require_once(__DIR__.'/../../vendor/autoload.php');

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);

        $product = $dollar->times(2);
        $this->assertEquals(10, $product->amount);

        $product = $dollar->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $dollar = new Dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5)));
        $this->assertFalse($dollar->equals(new Dollar(6)));
    }
}
