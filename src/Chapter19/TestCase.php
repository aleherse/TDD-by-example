<?php

namespace Chapter19;


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

    public function run()
    {
        $this->setUp();
        $this->{$this->name}();
    }

    public function setUp()
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
