<?php

namespace FIPBank\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class CreateAccountType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $option) {
        $builder->add('accountNumber', 'text', array(
                    'label' => 'Account Number',
                ))
                ->add('accountNumberRepeat', 'text', array(
                    'label' => 'Re-type Account Number',
                    'mapped' => FALSE,
                ))                
                ->add('accountType', 'choice', array(
                    'label' => 'Account Type',
                    'choices' => array(
                        'SavingAccount' => 'Saving Account',
                        'CurrentAccount' => 'Current Account'
                    )
                    
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FIPBank\UserBundle\Entity\BankAccount',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention' => 'task_item',
        ));
    }

    public function getName() {
        return 'BankAccountForm';
    }

}
