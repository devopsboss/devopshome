<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DeployController
 *
 * @package App\Controller
 */
class DeployController extends AbstractController
{

    /**
     * @Route("/app/{project}/deploy", name="app_deploy", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('deploy/index.html.twig', [
            'controller_name' => 'DeployController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
