<?php

namespace FIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FIPBundle:Front:index.html.twig');
    }
    public function privacyStatementAction(){
        return $this->render('FIPBundle:Front:privacyStatement.html.twig');
    }
    public function termsConditionAction(){
        return $this->render('FIPBundle:Front:termsConditions.html.twig');
    }
    public function valuesAndBeliefsAction(){
        return $this->render('FIPBundle:Front:values_and_beliefs.html.twig');
    }
    public function managementBoardAction(){
        return $this->render('FIPBundle:Front:board_Of_Management.html.twig');
    }
    public function branchLocatorAction(){
        return $this->render('FIPBundle:Front:branchLocator.html.twig');
    }
}
