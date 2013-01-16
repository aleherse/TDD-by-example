<?php

namespace Chapter23;

class TestSuite
{
    /** @var TestCase[] $tests */
    private $tests;

    public function __construct()
    {
        $this->tests = array();
    }

    public function add($test)
    {
        $this->tests[] = $test;
    }

    public function run(TestResult &$result)
    {
        foreach($this->tests as $test) {
            $test->run($result);
        }
    }
}
