<?php

namespace App\Controller\Web\Setting;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class IntegrationsController
 *
 * @package App\Controller
 */
class IntegrationsController extends AbstractController
{

    /**
     * @Route("/app/{project}/setting/integrations", name="app_setting_integrations", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('setting/integrations.html.twig', [
            'controller_name' => 'IntegrationsController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
