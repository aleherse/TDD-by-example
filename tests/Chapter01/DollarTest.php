<?php

namespace Chapter01;

require_once(__DIR__.'/../../vendor/autoload.php');

class DollarTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);

        $this->assertEquals(10, $dollar->amount);
    }
}
