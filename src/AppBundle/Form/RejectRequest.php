<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RejectRequest extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	
            ->add('comment',  'textarea', array(
    				'attr' => array('cols' => '50', 'rows' => '5','required'     => false )))
            
            
        ;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'f3e_app_bundle_reject_request';
    }
}