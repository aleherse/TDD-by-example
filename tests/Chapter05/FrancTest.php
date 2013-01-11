<?php

namespace Chapter05;

require_once(__DIR__.'/../../vendor/autoload.php');

class FrancTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $franc = new Franc(5);

        $this->assertEquals(new Franc(10), $franc->times(2));
        $this->assertEquals(new Franc(15), $franc->times(3));
    }

    public function testEquality()
    {
        $franc = new Franc(5);
        $this->assertTrue($franc->equals(new Franc(5)));
        $this->assertFalse($franc->equals(new Franc(6)));
    }

}
