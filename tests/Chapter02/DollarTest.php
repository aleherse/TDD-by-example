<?php

namespace Chapter02;


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
}
