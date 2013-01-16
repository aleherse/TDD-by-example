<?php

namespace Chapter21;

class TestResult
{
    private $runCount = 0;

    public function testStarted()
    {
        $this->runCount += 1;
    }

    public function summary()
    {
        return $this->runCount." run, 0 failed";
    }

}
