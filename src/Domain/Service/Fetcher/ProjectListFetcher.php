<?php

namespace App\Domain\Service\Fetcher;

use Symfony\Component\Routing\Router;

/**
 * Class SiteProjectFetcher
 *
 * @package App\Command\Fetcher
 */
class ProjectListFetcher
{

    /** @var Router */
    private $router;

    /**
     * SiteProjectFetcher constructor.
     *
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;

    }

    /**
     * @param null $projectId
     *
     * @return array
     */
    public function getProjectList($projectId = 0)
    {
//        $projects[1] = [
//            'identifier'     => '1',
//            'name'           => 'composer install',
//            'description'    => 'what does this project do',
//            'category' => 'this server',
//            'updated'        => '15 mins',
//            'viewUrl'        => '',//$this->router->generate('app_sites_project', ['site' => $siteId, 'project' => 1]),
//            //            'editUrl'    => $this->generateUrl('app_sites_edit', ['site' => 1]),
//        ];
//
//        $projects[2] = [
//            'identifier'     => '2',
//            'name'           => 'router',
//            'description'    => 'lists all the configured routes in your application',
//            'category' => 'remote server',
//            'updated'        => '3 days',
//            'viewUrl'        => '',//$this->router->generate('app_sites_project', ['site' => $siteId, 'project' => 2]),
//            //            'editUrl'    => $this->generateUrl('app_sites_edit', ['site' => 2]),
//        ];


        $projects[1] = [
            'identifier'  => '1',
            'name'        => 'opendevops-app',
            'description' => 'lists all the configured routes in your application',
            'category'    => 'git repo',
            'updated'     => '3 days',
            'viewUrl'     => $this->router->generate('app_project_edit', ['project' => 1]),
            //            'editUrl'    => $this->generateUrl('app_sites_edit', ['site' => 2]),
        ];


        //TODO: create sidebar Object
        $sidebar = [
            'title'    => 'Site Projects',
            'projects' => $projects,
            'active'   => $projectId,
        ];

        return $sidebar;
    }


}