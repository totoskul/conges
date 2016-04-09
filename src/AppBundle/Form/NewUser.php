<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewUser extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('username')
        	->add('email')
        	->add('password')
            ->add('firstName')
            ->add('lastName')
            ->add('serial')
			->add('contractType', 'entity', array(
                'class'    => 'AppBundle:ContractType',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                    ;
                },
                'empty_value'  => 'Type de contrat...',
                'empty_data'   => null,
                'required'     => true, 
                'property'	   => 'name'
            ))
			->add('arrival', 'date', array(
                'widget' => 'single_text',
                'required'     => true, 
				'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
				'attr' => array('class' => 'date'),
                'read_only' => false
            ))
			->add('departure', 'date', array(
                'widget' => 'single_text',
                'required'     => false, 
				'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
				'attr' => array('class' => 'date'),
                'read_only' => false
            ))
            
        ;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'f3e_app_bundle_user_new';
    }
}
