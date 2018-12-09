<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Controller used to manage the application security.
 * See https://symfony.com/doc/current/cookbook/security/form_login_setup.html.
 *
 * Class AuthController
 *
 * @package App\Controller
 */
class AuthController extends AbstractController
{
//    /**
//     * @Route("/login", name="security_login")
//     */
//    public function login(AuthenticationUtils $helper): Response
//    {
//        return $this->render('security/login.html.twig', [
//            // last username entered by the user (if any)
//            'last_username' => $helper->getLastUsername(),
//            // last authentication error (if any)
//            'error' => $helper->getLastAuthenticationError(),
//        ]);
//    }

    /**
     * @Route("/login", name="auth_login")
     */
    public function login()
    {
        return $this->render('auth/login.html.twig', [
        ]);
    }


    /**
     * @Route("/signup", name="auth_signup")
     */
    public function signup()
    {
        return $this->render('auth/signup.html.twig', [
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in config/packages/security.yaml
     *
     * @Route("/logout", name="auth_logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}
