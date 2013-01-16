<?php

namespace Chapter21;

class TestCaseTest extends TestCase
{
    /** @var $wasRun WasRun */
    protected $test;

    public function testTemplateMethod()
    {
        $test = new WasRun($this->output,"testMethod");
        $test->run();

        $this->assert($test->log == 'setUp testMethod tearDown ');
    }

    public function testResult()
    {
        $test = new WasRun($this->output,"testMethod");
        $result = $test->run();

        $this->assert('1 run, 0 failed' == $result->summary());
    }

    public function testFailedResult()
    {
        $test = new WasRun($this->output,"testBrokenMethod");
        $result = $test->run();

        $this->assert('1 run, 1 failed' == $result->summary());
    }
}
