<?php

namespace App\Controller\v1;

use FOS\RestBundle\Controller\FOSRestController;
use PhpExtended\Tail\Tail;
use PhpExtended\Tail\TailException;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class TaskController
 *
 * @Route(path="/api/v1/task")
 *
 * @package App\Controller\v1
 */
class TaskController extends FOSRestController
{
    /**
     * @Route("/{projectTaskCommand}/view", name="api_v1_tasks_view", methods={"GET"})
     *
     * @param $projectTaskCommand
     *
     * @return Response
     */
    public function viewTask($projectTaskCommand)
    {
        $data = 'view projectTaskCommand: ' . $projectTaskCommand;
        $view = $this->view($data, Response::HTTP_OK);

        return $this->handleView($view);

    }

    /**
     * @Route("/{projectTaskCommand}/edit", name="api_v1_tasks_edit", methods={"GET"})
     *
     * @param $projectTaskCommand
     *
     * @return Response
     */
    public function editTask($projectTaskCommand)
    {
        $data = 'edit projectTaskCommand: ' . $projectTaskCommand;
        $view = $this->view($data, Response::HTTP_OK);

        return $this->handleView($view);

    }

    /**
     * http://devopshome.localdev/api/v1/task/1/run
     *
     * @Route("/{projectTaskCommand}/run", name="api_v1_tasks_run", methods={"GET"})
     *
     * @param KernelInterface $kernel
     * @param                 $projectTaskCommand
     *
     * @return array
     * @throws \Exception
     */
    public function runProjectTask(KernelInterface $kernel, $projectTaskCommand)
    {
        $root_dir = $kernel->getRootDir();
        $log_dir  = $kernel->getLogDir();
        $env      = $kernel->getEnvironment();

        /**
         * TODO: get task command & arguments
         */
        //$task = $projectTaskCommand->getTaskCommand();
        //$taskCommand = $task->getCommand();
        $taskCommand = 'debug:router';
        //$taskArguments = $task->getArguments();
        $taskArguments = [];
        //$taskCommandHistory = new TaskCommandHistory($task);
        //$taskLogName = $task->getLogName();
        $taskLogName = 'project-task-1-history-1';


        $cmd = $root_dir . '/../bin/console ' . $taskCommand;
        if (\count($taskArguments) > 0) {
            $cmd .= implode(' ', $taskArguments);
        }
        $cmd     = "$cmd --env=$env >> $log_dir/$taskLogName.log 2>&1 & echo $!";
        $process = new Process($cmd);
        $process->run();
        if ($process->isSuccessful() === false) {
            //$taskCommandHistory->setStatus('error');
            throw new \RuntimeException($process->getErrorOutput());
        }

        $pid = $process->getOutput();

        return [
            'pid' => $pid,
            'cmd' => $cmd,
        ];
    }

    /**
     * http://devopshome.localdev/api/v1/task/1/output
     *
     * @Route("/{projectTaskCommand}/output", name="api_v1_tasks_output", methods={"GET"})
     *
     * @param KernelInterface $kernel
     * @param                 $projectTaskCommand
     *
     * @return string
     */
    public function viewOutput(KernelInterface $kernel,$projectTaskCommand)
    {
        $logName = 'project-task-1-history-1';
        $root_dir = $kernel->getRootDir();
        $log_dir  = $kernel->getLogDir();
        $env      = $kernel->getEnvironment();

        $logFile = $log_dir . '/' . $logName . '.log';

        $tail = new Tail($logFile);

        try {
            // 10 is the number of lines you want
            // 200 is the average number of chars on each line (optional)
            // false is to force throwing exceptions (optional, use true if you want silent mode)
            $lines = $tail->smart(1000, 200, false);

//            return implode($lines, "\n");
            return implode($lines);

        } catch (TailException $exception) {
            // do something is case it fails
            return $exception->getMessage();
        }
    }

    /**
     * http://devopshome.localdev/api/v1/task/1command
     *
     * @Route("/{projectTaskCommand}/command", name="api_v1_tasks_command", methods={"GET"})
     *
     * @param KernelInterface $kernel
     * @param                 $projectTaskCommand
     *
     * @return string
     */
    public function viewCommand(KernelInterface $kernel,$projectTaskCommand)
    {
        return 'bin/console debug:router';
    }
}
