<?php

namespace Chapter21;

require_once __DIR__."/../../vendor/autoload.php";

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$console = new Application();

$console->register('test')
    ->setCode(function(InputInterface $input, OutputInterface $output) {

        $test = new TestCaseTest($output, "testTemplateMethod");
        $test->run();

        $test = new TestCaseTest($output, "testResult");
        $test->run();

        $test = new TestCaseTest($output, "testFailedResult");
        $test->run();

    });

$console->run();