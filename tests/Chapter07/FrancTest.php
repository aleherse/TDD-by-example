<?php

namespace Chapter07;


class FrancTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $franc = new Franc(5);

        $this->assertEquals(new Franc(10), $franc->times(2));
        $this->assertEquals(new Franc(15), $franc->times(3));
    }
}
