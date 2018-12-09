<?php

namespace App\Command\SymfonyConsole;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 *
 * USAGE:
 * bin/console app:symfony-console:debug-router
 *
 * REFERENCE:
 * https://symfony.com/doc/current/routing/debug.html
 *
 * Class DebugRouterCommand
 *
 * @package App\Command
 */
class DebugRouterCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:symfony-console:debug-router')
            // the short description shown while running "php bin/console list"
            ->setDescription(' lists all the configured routes in your application')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command ...');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

//        $command = $this->getApplication()->find('debug:router');
//        $arguments = array(
//            'command' => 'debug:router',
//        );
//        $returnCode = $command->run(new ArrayInput($arguments), $output);


//        $process = new Process(['ls', '-lsa']);
//        $process = new Process(['../bin/console debug:router']);
        $process = new Process('cd ../ && bin/console debug:router');
        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo 'ERR > ' . $buffer;
            } else {
//                echo 'OUT > ' . $buffer;
                echo print_r($buffer, true);
            }
        });

    }

}