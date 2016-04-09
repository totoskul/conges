<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ValidateRequest extends AbstractType
{
	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	
            ->add('comment',  null, array(
    				'attr' => array('cols' => '50','size'=>'100', 'rows' => '5','required'     => false, 'empty_value'=>false )))
            
            
        ;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'f3e_app_bundle_validate_request';
    }
}