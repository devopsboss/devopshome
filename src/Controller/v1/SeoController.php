<?php

namespace App\Controller\v1;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class SeoController
 *
 * @Route(path="/api/v1/seo")
 *
 * @package App\Controller\v1
 */
class SeoController extends FOSRestController
{
    /**
     * @Route("/{task}", name="api_v1_tasks_get", methods={"GET"})
     *
     * @param $task
     *
     * @return Response
     */
    public function getTask($task)
    {
        $data = 'task: ' . $task;
        $view = $this->view($data, Response::HTTP_OK);

        return $this->handleView($view);

    }

}
