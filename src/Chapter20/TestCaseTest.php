<?php

namespace Chapter20;

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
}
