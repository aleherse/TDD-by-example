<?php

namespace Chapter18;

class TestCaseTest extends TestCase
{
    public function testRunning()
    {
        $test = new WasRun($this->output,"testMethod");

        $this->assert(!$test->wasRun);
        $test->run();
        $this->assert($test->wasRun);
    }
}
