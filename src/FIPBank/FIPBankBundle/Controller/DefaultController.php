<?php

namespace FIPBank\FIPBankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FIPBankBundle:Front:index.html.twig');
    }
    public function privacyStatementAction(){
        return $this->render('FIPBankBundle:Front:privacyStatement.html.twig');
    }
    public function termsConditionAction(){
        return $this->render('FIPBankBundle:Front:termsConditions.html.twig');
    }
    public function valuesAndBeliefsAction(){
        return $this->render('FIPBankBundle:Front:values_and_beliefs.html.twig');
    }
    public function managementBoardAction(){
        return $this->render('FIPBankBundle:Front:board_Of_Management.html.twig');
    }
    public function branchLocatorAction(){
        return $this->render('FIPBankBundle:Front:branchLocator.html.twig');
    }
    public function userPortalAction(){
        return $this->render('FIPBankBundle:Default:index.html.twig');
    }
    
}
