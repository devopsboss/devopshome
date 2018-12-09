<?php

namespace App\Controller\Web\Setting;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SitesController
 *
 * @package App\Controller
 */
class ToolsController extends AbstractController
{

    /**
     * @Route("/app/{project}/setting/tools", name="app_setting_tools", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('setting/tools.html.twig', [
            'controller_name' => 'ToolsController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
