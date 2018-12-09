<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SeoController
 *
 * @package App\Controller
 */
class SeoController extends AbstractController
{

    /**
     * @Route("/app/{project}/seo", name="app_seo", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('seo/index.html.twig', [
            'controller_name' => 'SeoController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
