<?php

namespace Chapter21;

class WasRun extends TestCase
{
    public $log = '';

    public function setUp()
    {
        $this->log .= "setUp ";
    }

    public function testMethod()
    {
        $this->log .= 'testMethod ';
    }

    public function testBrokenMethod()
    {
        throw new \Exception;
    }

    public function tearDown()
    {
        $this->log .= "tearDown ";
    }

}
