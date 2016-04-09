<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewRequest extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	
            ->add('startDate', 'date', array(
                'widget' => 'single_text',
                'required'     => true, 
				'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
				'attr' => array('class' => 'date'),
                'read_only' => false
            ))
			->add('commentUser', null, array('required'=>'true'))
            ->add('LeaveStartPeriod', 'entity', array(
                'class'    => 'AppBundle:LeavePeriod',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ;
                },
                'empty_value'  => 'Début...',
                'empty_data'   => null,
                'required'     => true, 
                'property'	   => 'name'
            ))
            ->add('endDate', 'date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
				'attr' => array('class' => 'date'),
				'required'     => true, 
                'read_only' => false
                
            ))
            ->add('LeaveEndPeriod', 'entity', array(
                'class'    => 'AppBundle:LeavePeriod',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ;
                },
                'empty_value'  => 'Fin...',
                'empty_data'   => null,
                'required'     => true, 
                'property'	   => 'name'
            ))
            ->add('LeaveType', 'entity', array(
                'class'    => 'AppBundle:LeaveType',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ;
                },
                'empty_value'  => 'Choisissez un type de congé...',
                'empty_data'   => null,
                'required'     => true, 
                'property'	   => 'name'
            ))
            
        ;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'f3e_app_bundle_request';
    }
}