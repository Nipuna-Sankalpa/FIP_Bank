<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FIPBank\FIPBankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of CommonActionController
 *
 * @author Flash
 */
class CommonActionController extends Controller {

    public function AccountManageAction(Request $request ) {
        

        return $this->render('FIPBankBundle:CommonProfile:settings.html.twig', array(
                    
        ));
    }

    
    public function profileSettingsAction() {
        $form = $this->container->get('fos_user.change_password.form');

        return $this->render('FIPBankBundle:CommonProfile:settings.html.twig', array(
                    'form' => $form->createView()
        ));
    }
    public function profileSettingsSuccessAction() {
        $form = $this->container->get('fos_user.change_password.form');

        return $this->render('FIPBankBundle:CommonProfile:settingsSuccessful.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
