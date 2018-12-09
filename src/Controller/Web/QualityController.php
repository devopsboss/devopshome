<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class qualityController
 *
 * @package App\Controller
 */
class QualityController extends AbstractController
{

    /**
     * @Route("/app/{project}/quality", name="app_quality", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('quality/index.html.twig', [
            'controller_name' => 'qualityController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
