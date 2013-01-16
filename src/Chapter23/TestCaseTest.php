<?php

namespace Chapter23;

class TestCaseTest extends TestCase
{
    private  $testResult;

    public function setUp()
    {
        $this->testResult = new TestResult();
    }

    public function testTemplateMethod()
    {
        $test = new WasRun($this->output, "testMethod");
        $test->run($this->testResult);

        $this->assert($test->log == 'setUp testMethod tearDown ');
    }

    public function testResult()
    {
        $test = new WasRun($this->output,"testMethod");
        $result = $test->run($this->testResult);

        $this->assert('1 run, 0 failed' == $result->summary());
    }

    public function testFailedResult()
    {
        $test = new WasRun($this->output,"testBrokenMethod");
        $result = $test->run($this->testResult);

        $this->assert('1 run, 1 failed' == $result->summary());
    }

    public function testFailedResultFormatting()
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();

        $this->assert('1 run, 1 failed' == $result->summary());
    }

    public function testSuite()
    {
        $suite = new TestSuite();

        $suite->add(new WasRun($this->output, "testMethod"));
        $suite->add(new WasRun($this->output, "testBrokenMethod"));

        $result = new TestResult();
        $suite->run($result);

        $this->assert('2 run, 1 failed' == $result->summary());
    }
}
