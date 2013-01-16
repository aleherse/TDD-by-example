<?php

namespace Chapter23;

require_once __DIR__."/../../vendor/autoload.php";

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$console = new Application();

$console->register('test')
    ->setCode(function(InputInterface $input, OutputInterface $output) {

        $suite = new TestSuite();

        $suite->add(new TestCaseTest($output, "testTemplateMethod"));
        $suite->add(new TestCaseTest($output, "testResult"));
        $suite->add(new TestCaseTest($output, "testFailedResult"));
        $suite->add(new TestCaseTest($output, "testFailedResultFormatting"));

        $result = new TestResult();
        $suite->run($result);

        $output->writeln($result->summary());
    });

$console->run();