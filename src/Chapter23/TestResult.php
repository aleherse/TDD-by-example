<?php

namespace Chapter23;

class TestResult
{
    private $runCount;
    private $errorCount;

    public function __construct()
    {
        $this->runCount = 0;
        $this->errorCount = 0;
    }

    public function testStarted()
    {
        $this->runCount += 1;
    }

    public function testFailed()
    {
        $this->errorCount += 1;
    }

    public function summary()
    {
        return $this->runCount." run, ".$this->errorCount." failed";
    }
}
