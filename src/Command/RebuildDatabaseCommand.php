<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 * USAGE:
 * bin/console opendevops:rebuild:database
 *
 * bin/console opendevops:rebuild:database --no-migrations
 * bin/console opendevops:rebuild:database --runtests
 *
 *
 * Class RebuildDatabaseCommand
 *
 * @package App\Command
 */
class RebuildDatabaseCommand extends AbstractCommand
{


    protected function configure()
    {
        $this
            ->setName('opendevops:rebuild:database')
            ->setDescription('Purges database, reloads fixtures, optionally runs tests')
            ->addOption('runtests', null, InputOption::VALUE_NONE, 'Run the tests')
            ->addOption('no-migrations', null, InputOption::VALUE_NONE, 'Do not run doctrine migrations');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     * @throws \LogicException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
     * @throws \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
//        /**
//         * Flatten all the tables
//         * Note: this doesn't remove some tables like migrations_versions (so run processDropDatabaseTables instead)
//         */
//        $output->writeln('>> Flatten all the tables');
//        $this->processFlattenTables();


        /**
         * Clear cache
         */
        $output->writeln('>> Clear cache');
        $this->processClearCache();

        /**
         * Drop database tables
         */
        $output->writeln('>> Drop database tables');
        $this->processDropDatabaseTables();

        /**
         * Re-create schema or run migrations
         */
        $output->writeln('>> Run migrations (or re-create schema if "--no-migrations" was used)');
        if ($input->getOption('no-migrations')) {
            /**
             * Re-create schema
             */
            $output->writeln('>> Re-create schema');
            $this->processReCreateSchema();

        } else {
            /**
             * Run migrations
             */
            $output->writeln('>> Run migrations');
            $this->processRunMigrations();
        }

        /**
         * Clear any doctrine caches
         */
        $output->writeln('>> Clear any doctrine caches');
        $this->processClearDoctrineCaches();

        /**
         * Load the Fixtures
         */
        $output->writeln('>> Load the Fixtures');
        $this->processLoadFixtures();


        $output->writeln('>> Complete');

        /**
         * Run the tests if the option has been selected
         */
//        $output->writeln('Run the tests if the option has been selected');
//        if ($input->getOption('runtests')) {
//            $output->writeln('Run Unit Tests');
//            $this->processRunUnitTests();
//            $output->writeln('Run Api Tests');
//            $this->processRunApiTests();
//        }
    }

    private function processClearCache()
    {
        $process = new Process(['bin/console cache:clear']);
        $this->runAndOutputProcess($process);
    }

    private function processFlattenTables()
    {
        $process = new Process(['bin/console doctrine:schema:drop --force']);
        $this->runAndOutputProcess($process);
    }

    private function processDropDatabaseTables()
    {
        $process = new Process(['bin/console doctrine:schema:drop --force --full-database']);
        $this->runAndOutputProcess($process);
    }

    private function processReCreateSchema()
    {
        $process = new Process(['bin/console doctrine:schema:create ']);
        $this->runAndOutputProcess($process);
    }

    private function processRunMigrations()
    {
        $process = new Process(['bin/console doctrine:migrations:migrate ']);
        $this->runAndOutputProcess($process);
    }


    private function processClearDoctrineCaches()
    {
        $cacheTypes = ['metadata', 'query', 'result'];
        foreach ($cacheTypes as $cacheType) {
            $process = new Process(['bin/console doctrine:cache:clear-' . $cacheType]);
            $this->runAndOutputProcess($process);
        }
    }

    private function processLoadFixtures()
    {
        $process = new Process(['bin/console doctrine:fixtures:load -n']);
        $this->runAndOutputProcess($process);
    }

//    private function processRunUnitTests()
//    {
//        $process = new Process(['vendor/bin/codecept run unit');
//        $this->runAndOutputProcess($process);
//    }
//
//    private function processRunApiTests()
//    {
//        $process = new Process(['vendor/bin/codecept run api']);
//        $this->runAndOutputProcess($process);
//    }

}
