<?php

namespace App\Controller\Web;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SecurityController
 *
 * @package App\Controller
 */
class SecurityController extends AbstractController
{

    /**
     * @Route("/app/{project}/security", name="app_security", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
            'projectList' => $this->get('app.fetcher.project_list')->getProjectList($project)
        ]);
    }
}
