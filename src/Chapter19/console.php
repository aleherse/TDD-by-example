<?php

namespace Chapter19;

require_once __DIR__."/../../vendor/autoload.php";

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$console = new Application();

$console->register('test')
    ->setCode(function(InputInterface $input, OutputInterface $output) {

        $test = new TestCaseTest($output, "testRunning");
        $test->run();

        $test = new TestCaseTest($output, "testSetUp");
        $test->run();
    });

$console->run();