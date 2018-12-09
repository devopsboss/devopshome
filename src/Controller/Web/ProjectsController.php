<?php

namespace App\Controller\Web;

use App\Domain\Service\Fetcher\ProjectListFetcher;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ProjectsController
 *
 * @package App\Controller
 */
class ProjectsController extends AbstractController
{

    /**
     * @Route("/app/{project}/project/edit", name="app_project_edit", defaults={"project": "0"},)
     *
     * @param ProjectListFetcher $fetcher
     * @param                    $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ProjectListFetcher $fetcher, $project)
    {
        return $this->render('projects/edit.html.twig', [
            'controller_name' => 'ProjectsController',
            'projectList'     => $fetcher->getProjectList($project),
        ]);
    }

    /**
     * @Route("/app/{project}/project/list", name="app_project_list", defaults={"project": "0"},)
     *
     * @param ProjectListFetcher $fetcher
     * @param                    $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function list(ProjectListFetcher $fetcher, $project)
    {
        return $this->render('projects/list.html.twig', [
            'controller_name' => 'ProjectsController',
            'projectList'     => $fetcher->getProjectList($project),
        ]);
    }
}
