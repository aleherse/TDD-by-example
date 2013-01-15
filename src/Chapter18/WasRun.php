<?php

namespace Chapter18;

class WasRun extends TestCase
{
    public $wasRun = false;

    public function testMethod()
    {
        $this->wasRun = true;
    }


}
