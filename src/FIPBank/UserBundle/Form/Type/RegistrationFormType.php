<?php

namespace FIPBank\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseForm;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends BaseForm {

    public function buildForm(FormBuilderInterface $builder, array $option) {

        $builder->add('accountNumber', 'text', array(
                    'label' => 'Account Number',
                    'required' => true,
                ))
                ->add('role', 'choice', array(
                    'label' => 'Select Role:',
                    'choices' => array(
                        'ROLE_USER' => 'Customer',
                        'ROLE_ADMIN' => 'Admin',
                    ),
        ));
    }

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'FIP_REG_FORM';
    }

}
