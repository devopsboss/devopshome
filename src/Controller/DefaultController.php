<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
//    /**
//     * @return StreamedResponse
//     */
//    public function indexAction2()
//    {
//        $response = new StreamedResponse(function () {
//            $input = new ArrayInput([
//                                        '--name'      => 'Inanzzz',
//                                        '--iteration' => 10,
//                                    ]);
//            $input->setInteractive(false);
//
//            $output = new StreamedOutput(fopen('php://stdout', 'w'));
////            $output = new BufferedOutput();
//
//            $this->get('app.command.say_hello')->run($input, $output);
//        });
//
//        return $response;
//    }

    /**
     * @return Response
     */
    public function index()
    {
//        return $this->render('default/index.html.twig', [
        return $this->render('default/test.html.twig', [
//        return $this->render('base.html.twig', [
'controller_name' => 'DefaultController',
        ]);
    }


    /**
     * @Route("/default/command/router", name="default_command_router")
     */
    public function commandRouterAction(KernelInterface $kernel)
    {
//        $application = new Application($kernel);
//        $application->setAutoExit(false);
//
//        $input = new ArrayInput([
//                                    'command' => 'app:symfony-console:debug-router',
//                                ]);
//
//        // You can use NullOutput() if you don't need the output
//        $output = new BufferedOutput();
//        $application->run($input, $output);
//
//        // return the output, don't use if you used NullOutput()
//        $content = '<pre>' . $output->fetch() . '</pre>';
//
//        // return new Response(""), if you used NullOutput()
//        return new Response($content);


        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput(['command' => 'app:symfony-console:debug-router']);

        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();

        // return new Response(""), if you used NullOutput()
        return new Response($content);

//        // ...
//        $output = new BufferedOutput(
//            OutputInterface::VERBOSITY_NORMAL,
//            true // true for decorated
//        );
//        // ...
//
//        // return the output
//        $converter = new AnsiToHtmlConverter();
//        $content = $output->fetch();
//
//        return new Response($converter->convert($content));
    }


    /**
     * @Route("/default/command", name="default_command")
     */
    public function commandAction($messages = 10, KernelInterface $kernel)
    {
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput([
                                    'command'     => 'say:hello',
                                    '--name'      => 'Test',
                                    '--iteration' => 5,
                                ]);

        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();

        // return new Response(""), if you used NullOutput()
        return new Response($content);
    }
}
