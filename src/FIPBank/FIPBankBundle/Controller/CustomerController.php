<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of CustomerController
 *
 * @author Flash
 */
class CustomerController extends Controller {
    
    public function indexAction(){
        
    }
    public function viewHistoryAction(){
        return $this->render('FIPBankBundle:UserProfile:ReviewHistory.html.twig');
    }
    public function viewBalanceAction(){
        return $this->render('FIPBankBundle:UserProfile:transactions.html.twig');
    }
    public function performanceTransactionAction(){}
    
}
