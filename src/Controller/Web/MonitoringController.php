<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class MonitoringController
 *
 * @package App\Controller
 */
class MonitoringController extends AbstractController
{

    /**
     * @Route("/app/{project}/monitoring", name="app_monitoring", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('monitoring/index.html.twig', [
            'controller_name' => 'MonitoringController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
