<?php

namespace Chapter23;


class TestCase
{
    public $name;

    /** @var $output \Symfony\Component\Console\Output\OutputInterface */
    protected $output;

    public function __construct($output, $name)
    {
        $this->name = $name;
        $this->output = $output;
    }

    public function run(TestResult &$result)
    {
        $result->testStarted();

        $this->setUp();
        try {
            $this->{$this->name}();
        } catch(\Exception $e) {
            $result->testFailed();
        }
        $this->tearDown();

        return $result;
    }

    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function assert($bool)
    {
        if($bool) {
            $this->output->writeln('<info>OK</info>');
        }
        else {
            $this->output->writeln('<error>Fail</error>');
        }
    }
}
