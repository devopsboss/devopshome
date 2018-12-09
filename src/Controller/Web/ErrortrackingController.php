<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ErrortrackingController
 *
 * @package App\Controller\Web
 */
class ErrortrackingController extends AbstractController
{
    /**
     * @Route("/app/{project}/errortracking", name="app_errortracking", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('errortracking/index.html.twig', [
            'controller_name' => 'ErrortrackingController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
