<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class HomeController
 *
 * @package App\Controller
 */
class HomeController extends AbstractController
{

    /**
     * @Route("/app/{project}/home", name="app_home", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)

        ]);
    }
}
