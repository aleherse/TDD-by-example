<?php

namespace Chapter19;

class TestCaseTest extends TestCase
{
    /** @var $wasRun WasRun */
    protected $test;

    public function setUp()
    {
        $this->test = new WasRun($this->output,"testMethod");
    }

    public function testRunning()
    {
        $this->test->run();
        $this->assert($this->test->wasRun);
    }

    public function testSetUp()
    {
        $this->test->run();
        $this->assert($this->test->wasSetUp);
    }
}
