<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Process\Exception\LogicException;
use Symfony\Component\Process\Exception\RuntimeException;
use Symfony\Component\Process\Process;

/**
 * Class AbstractCommand
 *
 * @package App\Command
 */
abstract class AbstractCommand extends Command
{
    /**
     * @var string
     */
    protected $rootDir;

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     * @throws \Symfony\Component\Console\Exception\RuntimeException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
     * @throws \LogicException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('>> Start');
        $input->validate();

        // let's us do a cache clear from the command (see https://github.com/symfony/symfony/issues/24885)
        $this->getApplication()->setDispatcher(new EventDispatcher());

        // eg. "/var/www/project/api/"
//        $this->rootDir = $this->getContainer()->get('kernel')->getRootDir() . '/';
        $this->rootDir = '/';
    }

    /**
     * @param Process $process
     *
     * @throws RuntimeException
     * @throws LogicException
     */
    protected function runAndOutputProcess(Process $process)
    {
        $process->run();
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new RuntimeException($process->getErrorOutput());
        }
        echo $process->getOutput();
    }
}
