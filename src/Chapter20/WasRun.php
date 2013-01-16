<?php

namespace Chapter20;

class WasRun extends TestCase
{
    public $log = '';

    public function testMethod()
    {
        $this->log .= 'testMethod ';
    }

    public function setUp()
    {
        $this->log .= "setUp ";
    }

    public function tearDown()
    {
        $this->log .= "tearDown ";
    }

}
