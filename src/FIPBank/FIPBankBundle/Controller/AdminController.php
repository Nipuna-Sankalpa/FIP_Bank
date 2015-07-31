<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FIPBank\UserBundle\Form\Type\CreateAccountType;
use FIPBank\UserBundle\Entity\BankAccount;
/**
 * Description of AdminController
 *
 * @author Flash
 */
class AdminController extends Controller {

    public function indexAction() {

        $bankAccount = new BankAccount();

        $registrationForm = $this->container->get('fos_user.registration.form');

        $bankForm = $this->createForm(new CreateAccountType(), $bankAccount, array('action' => '#', 'method' => 'POST'));

        return $this->render('FIPBankBundle:SuperAdminProfile:SystemManagement.html.twig', array(
                    'registrationForm' => $registrationForm->createView(),
                    'bankForm' => null,
        ));
    }

    public function createAdminAction() {
        $registrationForm = $this->container->get('fos_user.registration.form');

        return $this->render('FIPBankBundle:SuperAdminProfile:SystemManagement.html.twig', array(
                    'registrationForm' => $registrationForm->createView()
        ));
    }

}
