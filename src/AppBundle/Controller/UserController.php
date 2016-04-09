<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Helper\DateHelper;
use AppBundle\Form\NewUser;
use AppBundle\Form\EditUser;
use AppBundle\Form\ChangePasswordUser;
use AppBundle\Form\DisableUser;
use AppBundle\Form\ChangeUserPasswordUser;

use AppBundle\Entity\UserLeaveMonth;
use AppBundle\Entity\Time;
use AppBundle\Entity\LeaveType;
use AppBundle\Entity\ContractType;
use AppBundle\Entity\User;


class UserController extends Controller
{
    /**
     * @Route("/User/", name="user_list")
     * @Template()
     */
    public function indexAction()
    {
	   	$em = $this->getDoctrine()->getManager();
    	$rep = $em->getRepository('AppBundle:User')->findBy(array('enabled'=>'1'));
		$leaves=$em->getRepository('AppBundle:UserLeaveMonth')->getEveryAvailableLeaves();
		return array(
    	"data" => $rep,
		"leaves" => $leaves
		);
    }
        /**
     * @Route("/User/new", name="user_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newUserAction(Request $request)
    {
    	$entity = new User();
        $form = $this->getNewForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //$entity->setRoles(array('ROLE_ADMIN'));
            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
    		$encodedPass = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($encodedPass);
            $entity->setEnabled(1);
			
			$currentYear = new \DateTime();
			$currentYear = $currentYear->format("Y");
			$endContractYear = $entity->getDeparture()->format("Y");
			$startMonth = $entity->getArrival()->format("m");
			$endMonth = $entity->getDeparture()->format("m");
			// calcul du nombre de RTTV
			// si date de début != janvier alors, on enlève un RTT par mois non travaillé
			$rttv = 12;
			$rttf = 11;
			if($startMonth != '01')
			{
				$rttv -= $startMonth-1;
				$rttf -= $startMonth-1;
			}
			if($endMonth != '12' and $endContractYear == $currentYear)
			{
				$rttv -= 12-$endMonth;
				$rttf -= 11-$endMonth;
			}
			$leaveTypeRTTV = $em->getRepository("AppBundle:LeaveType")->findOneBy(array('unique_name'=>"RTTV"));
			$leaveTypeRTTF = $em->getRepository("AppBundle:LeaveType")->findOneBy(array('unique_name'=>"RTTF"));
			$leaveTypeCP = $em->getRepository("AppBundle:LeaveType")->findOneBy(array('unique_name'=>"CP"));
			$time = $em->getRepository("AppBundle:Time")->findOneBy(array(), array('id'=>'DESC'));
			$e_rttv = new UserLeaveMonth();
			$e_rttv->setLeaveType($leaveTypeRTTV);
			$e_rttv->setTime($time);
			$e_rttv->setUser($entity);
			$e_rttv->setNbAvailable($rttv);
			$e_rttv->setNbUsed(0);
			$e_rttv->setYear(0);
			$em->persist($e_rttv);
			
			$e_rttf = new UserLeaveMonth();
			$e_rttf->setLeaveType($leaveTypeRTTF);
			$e_rttf->setTime($time);
			$e_rttf->setUser($entity);
			$e_rttf->setNbAvailable($rttf);
			$e_rttf->setNbUsed(0);
			$e_rttf->setYear(0);
			$em->persist($e_rttf);
	
			$e_cp = new UserLeaveMonth();
			$e_cp->setLeaveType($leaveTypeCP);
			$e_cp->setTime($time);
			$e_cp->setUser($entity);
			// Si le salarié est en stage ==> pas de CP
			$contractTypeStage = $em->getRepository("AppBundle:ContractType")->findOneBy(array('name'=>"Stage"));
			if($entity->getContractType() == $contractTypeStage)
			{
				$e_cp->setNbAvailable(0);
			}
			// sinon, CP OK
			else
			{
				$e_cp->setNbAvailable(2.08);
			}
			$e_cp->setNbUsed(0);
			$e_cp->setYear(0);
			$em->persist($e_cp);
	
			
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_list'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );    
       
	}
     
     /**
     * @Route("/my_account", name="my_account")
     * @Method({"GET", "POST"})
     * @Template()
     */
    /*public function myAccountAction(Request $request)
    {
    	$entity = $this->getUser();
        $form = $this->getEditForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('my_account'));
        }
		

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );    
       
	}*/
     
     /**
	 * Displays the specified user account
     * @Route("/User/{id}/edit", name="edit_account")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function userAccountEditAction(Request $request, User $user)
    {
    	$form = $this->getEditUserForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // Gestion du prorata de fin pour les RTT si la fin de contrat est dans l'année en cours. 
			if(null == $user->getDeparture())
			{
				$user->setDeparture(new DateTime('2030-12-31'));
			}
			$currentYear = new \DateTime();
			$currentYear = $currentYear->format("Y");
			$endContractYear = $user->getDeparture()->format("Y");
			$startContractYear = $user->getArrival()->format("Y");
			$startMonth = $user->getArrival()->format("m");
			$endMonth = $user->getDeparture()->format("m");
			// calcul du nombre de RTTV
			// si date de début != janvier alors, on enlève un RTT par mois non travaillé
			$rttv = 12;
			$rttf = 11;
			if($startMonth != '01' and $startContractYear == $currentYear)
			{
				$rttv -= $startMonth-1;
				$rttf -= $startMonth-1;
			}
			if($endMonth != '12' and $endContractYear == $currentYear)
			{
				$rttv -= 12-$endMonth;	
				$rttf -= 11-$endMonth;
			}
			$endContractYear = $user->getDeparture()->format("Y");
			//if($endContractYear == $currentYear)
			//{
			// Fin de contrat dans l'année courante ==> On proratise le nb RTT variables et fixes
			//$endContractMonth = new \DateTime($user->getDeparture());
			$endContractMonth = $user->getDeparture()->format("m");
			//$RTTV = $endContractMonth*1.0;
			$leaveType = $em->getRepository("AppBundle:LeaveType")->findBy(array('unique_name'=>"RTTV"));
			$ulm = $em->getRepository('AppBundle:UserLeaveMonth')->findUserRTTV($user, $currentYear);
			$um = $em->getRepository('AppBundle:UserLeaveMonth')->findOneBy(array('id'=>$ulm));
			$um->setNbAvailable($rttv);
			$em->persist($um);
			// gestion des RTTF
			$leaveType = $em->getRepository("AppBundle:LeaveType")->findBy(array('unique_name'=>"RTTF"));
			$ulmf = $em->getRepository('AppBundle:UserLeaveMonth')->findUserRTTF($user, $currentYear);
			$umf = $em->getRepository('AppBundle:UserLeaveMonth')->findOneBy(array('id'=>$ulmf));
			$umf->setNbAvailable($rttf);
			$em->persist($umf);
			//}
			
			$em->persist($user);
            $em->flush();
			
            return $this->redirect($this->generateUrl('user_list'));
        }
		else
		{
			echo "oups...";
		}

        return array(
            'entity' => $user,
            'form'   => $form->createView(),
        );    
       
	}
	
	 /**
	 * Disables specific account
     * @Route("/User/{id}/disable", name="disable_account")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function userAccountDisableAction(Request $request, User $user)
    {
    	$form = $this->getDisableUserForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$user->setEnabled(0);
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('user_list'));
        }
		

        return array(
            'entity' => $user,
            'form'   => $form->createView(),
        );    
       
	}

	
	 /**
     * @Route("/change_password", name="change_password")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function changePasswordAction(Request $request)
    {
    	$entity = $this->getUser();
        $form = $this->getChangePasswordForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
    		$encodedPass = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($encodedPass);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('my_account'));
        }
		

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );    
       
	}


	 /**
     * @Route("/change_user_password/{id}/", name="change_user_password")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function changeUserPasswordAction(Request $request, User $user)
    {
        $form = $this->getChangeUserPasswordForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
    		$encodedPass = $encoder->encodePassword($user->getPassword(), $user->getSalt());
            $user->setPassword($encodedPass);
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('user_list'));
        }
		

        return array(
            'entity' => $user,
            'form'   => $form->createView(),
        );    
       
	}
 
 
    /**
     * Creates a form to create a Device entity.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getNewForm(User $entity)
    {
        $form = $this->createForm(new NewUser(), $entity, array(
            'action' => $this->generateUrl('user_new'),
            'method' => 'POST',
        ));

        $form->add('Créer', 'submit')
            ->add('Annuler', 'button');

        return $form;
    }
	
    /**
     * Form allowing to update his own account
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getEditForm(User $entity)
    {
        $form = $this->createForm(new EditUser(), $entity, array(
            'action' => $this->generateUrl('my_account'),
            'method' => 'POST',
        ));

        $form->add('Modifier', 'submit')
            ->add('Revenir', 'button');

        return $form;
    }

    /**
     * Form allowing to edit another user account
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getEditUserForm(User $entity)
    {
        $form = $this->createForm(new EditUser(), $entity, array(
            'action' => $this->generateUrl('edit_account', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Modifier', 'submit')
            ->add('Annuler', 'button');

        return $form;
    }
	 
	 /**
     * Form allowing to edit another user account
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getDisableUserForm(User $entity)
    {
		$form = $this->createForm(new DisableUser(), $entity, array(
            'action' => $this->generateUrl('disable_account', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Valider', 'submit')
            ->add('Annuler', 'button');

        return $form;
	}
	 /**
     * Form allowing to edit another user account
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getChangePasswordForm(User $entity)
    {
		$form = $this->createForm(new ChangePasswordUser(), $entity, array(
            'action' => $this->generateUrl('change_password', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Modifier', 'submit')
            ->add('Annuler', 'button');

        return $form;
	}	
	
		 /**
     * Form allowing to edit another user account
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getChangeUserPasswordForm(User $entity)
    {
		$form = $this->createForm(new ChangeUserPasswordUser(), $entity, array(
            'action' => $this->generateUrl('change_user_password', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Modifier', 'submit')
            ->add('Annuler', 'button');

        return $form;
	}	
	
}
