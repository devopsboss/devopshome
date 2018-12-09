<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SayHelloCommand
 *
 * @package App\Command
 */
class GitCommand extends Command
{
    /**
     * 
     */
    protected function configure()
    {
        $this
            ->setName('opendevops:git');
//            ->addOption('name', null, InputOption::VALUE_REQUIRED)
//            ->addOption('iteration', null, InputOption::VALUE_REQUIRED);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //TODO: see https://github.com/cpliakas/git-wrapper
        
//        for ($i = 1; $i <= $input->getOption('iteration'); $i++) {
//            $output->writeln(sprintf('%d: Hello %s', $i, $input->getOption('name')));
//
//            sleep(1);
//        }
    }
}