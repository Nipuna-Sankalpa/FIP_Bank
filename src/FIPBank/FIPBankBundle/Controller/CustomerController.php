<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FIPBank\FIPBankBundle\Entity\BankAccount;

/**
 * Description of CustomerController
 *
 * @author Flash
 */
class CustomerController extends Controller {

    public function indexAction() {
        return $this->render('FIPBankBundle:UserProfile:ReviewHistory.html.twig');
    }

    public function viewHistoryAction($userId) {

        return $this->render('FIPBankBundle:UserProfile:ReviewHistory.html.twig', array(
                    'history' => $this->fetchRecords($userId),
                    'bankAccount' => $this->getAccountDeatils($userId),
        ));
    }

    public function settingsAction() {
        $form = $this->container->get('fos_user.change_password.form');

        return $this->render('FIPBankBundle:UserProfile:settings.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function fetchRecords($userId) {
        $query = "select * from perform_transaction where userId=$userId order by date DESC";
        $conn = $this->getDoctrine()->getManager()->getConnection()->prepare($query);

        $conn->execute();

        return $conn->fetchAll();
    }

    public function getAccountDeatils($userId) {
        $query = "select * from bank_accounts where userId=$userId ";
        $conn = $this->getDoctrine()->getManager()->getConnection()->prepare($query);
        $conn->execute();
        $result = $conn->fetchAll();
        
        if ($result) {
             $bankAccount = new BankAccount($result[0]['userId'], $result[0]['accountNumber'], $result[0]['accountBalance'], $result[0]['createdBy'], $result[0]['accountType']);
        }

        return $bankAccount;
    }

}
