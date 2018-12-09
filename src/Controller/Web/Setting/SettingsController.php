<?php

namespace App\Controller\Web\Setting;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SettingsController
 *
 * @package App\Controller
 */
class SettingsController extends AbstractController
{

    /**
     * @Route("/app/{project}/setting/settings", name="app_setting_settings", defaults={"project": "0"},)
     * @param $project
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($project)
    {
        return $this->render('setting/settings.html.twig', [
            'controller_name' => 'SettingsController',
            'projectList'     => $this->get('app.fetcher.project_list')->getProjectList($project),
        ]);
    }

    /**
     * @Route("/app/setting/phpinfo", name="app_setting_phpinfo")
     */
    public function phpInfo()
    {
        ob_start();
        phpinfo();
        $phpinfo = ob_get_contents();
        ob_end_clean();

        return $this->render('setting/phpinfo.html.twig', [
            'phpinfo' => $phpinfo,
//            'projectList' => $this->get('app.fetcher.project_list')->getProjectList()
        ]);

    }
}
