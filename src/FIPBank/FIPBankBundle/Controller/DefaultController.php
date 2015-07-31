<?php

namespace FIPBank\FIPBankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller {

    public function indexAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);


        return $this->render('FIPBankBundle:Front:index.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function privacyStatementAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('FIPBankBundle:Front:privacyStatement.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function termsConditionAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('FIPBankBundle:Front:termsConditions.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function valuesAndBeliefsAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('FIPBankBundle:Front:values_and_beliefs.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function managementBoardAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('FIPBankBundle:Front:board_Of_Management.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function branchLocatorAction() {
        $request = $this->container->get('request');
        $session = $request->getSession();
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('FIPBankBundle:Front:branchLocator.html.twig', array(
                    'csrf_token' => $csrfToken,
                    'last_username' => $lastUsername,
                    'error' => '',
        ));
    }

    public function userPortalAction() {
        return $this->render('FIPBankBundle:Default:index.html.twig');
    }

    public function roleSelectorAction() {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $role = $user->getRoles();
        $userId = 4;

        if ($role[0] == "ROLE_USER") {
            return $this->redirect($this->generateUrl("ViewHistory", array(
                                'userId' => $userId
            )));
        } else if ($role[0] == "ROLE_ADMIN") {
            return $this->redirect($this->generateUrl("Admin"));
        } else if ($role[0] == "ROLE_SUPER_ADMIN") {
            return $this->redirect($this->generateUrl("superAdmin"));
        } else {
            echo $role[0];
            die("ERROR");
        }
    }

}
