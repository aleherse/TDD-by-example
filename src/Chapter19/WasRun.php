<?php

namespace Chapter19;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function testMethod()
    {
        $this->wasRun = true;
    }

    public function setUp()
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }

}
