<?php

namespace App\Controller\Web\Setting;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SitesController
 *
 * @package App\Controller
 */
class ThirdPartyController extends AbstractController
{

    /**
     * @Route("/app/{project}/setting/third-party", name="app_setting_thirdParty", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('setting/third-party.html.twig', [
            'controller_name' => 'ThirdPartyController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
