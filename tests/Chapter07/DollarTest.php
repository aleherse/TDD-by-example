<?php

namespace Chapter07;

require_once(__DIR__.'/../../vendor/autoload.php');

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);

        $this->assertEquals(new Dollar(10), $dollar->times(2));
        $this->assertEquals(new Dollar(15), $dollar->times(3));
    }
}
