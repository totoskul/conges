<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\NewRequest;
use AppBundle\Form\ValidateRequest;
use AppBundle\Form\RejectRequest;
use AppBundle\Form\CancelRequest;
use AppBundle\Helper\DateHelper;
use AppBundle\Entity\LeaveDetail;
use AppBundle\Entity\LeaveRequestStatus;
use AppBundle\Entity\User;


class LeaveRequestController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$rep = $em->getRepository('AppBundle:LeaveDetail')->findAllUserLeaves($this->getUser());
    	$ret = $em->getRepository('AppBundle:UserLeaveMonth')
    				->getAvailableLeaves($this->getUser());
		
    	// récupération de la quantité des congés
    	// récupération des CP N
    	
    	// Récupération des CP N-1
    	
    	// Récupération des RTT fixes
    	$period = date("Ym");
    	
    	// Récupération des RTT variables
    	return array(
    	"data" => $rep,
		"CP_N" => $ret['CP_N'],
    	"CP_N1" => $ret['CP_N1'],
    	"RTT_Fixes" => $ret['RTTF'],
    	"RTT_variables" => $ret['RTTV']);
    }
    
     /**
     * Validates a request
     *
     * @Route("/LeaveRequest/{id}/validateRequest", name="validate_request")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function validateRequestAction(Request $request, LeaveDetail $leaveDetail)
    {
        $form = $this->getValidateForm($leaveDetail);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $status_to_update = $em->getRepository('AppBundle:LeaveRequestStatus')->findOneBy(array('name'=>'Validé'));
            $leaveDetail->setLeaveStatus($status_to_update);
            
            $em->persist($leaveDetail);
            // Décrémenter les congés disponibles en commençant par les plus anciens. 
			try
			{
				//$this->decrementLeaves($leaveDetail->getUser(),$leaveDetail->getLeaveType(), $leaveDetail->getNbDays(), 
				//$leaveDetail->getStartDate(), $leaveDetail->getEndDate());
			}
			catch(\Exception $e)
			{
				return $this->redirect($this->generateUrl('validate', array('error_message'=>$e->getMessage())));
			}
            $em->flush();
			$message = \Swift_Message::newInstance()
			->setSubject('[F3E] Congés validés')
			->setFrom('webmaster@f3e.asso.fr')
			->setTo('l.delcayrou@f3e.asso.fr')
			->setCc(array('h.hachouche@f3e.asso.fr'))
			->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/validation.html.twig',
                array('entity' => $leaveDetail)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
	$this->get('mailer')->send($message);


            return $this->redirect($this->generateUrl('validate'));
        }

        return array(
            'entity' => $leaveDetail,
            'form'   => $form->createView(),
        );    
    }

    
     /**
     * Rejects a request
     *
     * @Route("/LeaveRequest/{id}/rejectRequest", name="reject_request")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function rejectRequestAction(Request $request, LeaveDetail $leaveDetail)
    {
        $form = $this->getRejectForm($leaveDetail);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $status_to_update = $em->getRepository('AppBundle:LeaveRequestStatus')->findOneBy(array('name'=>'Refusé'));
            $leaveDetail->setLeaveStatus($status_to_update);
            
            $em->persist($leaveDetail);
			// Re-créditer le solde de congés payés si la demande a été validée... 
			$this->incrementLeaves($leaveDetail->getUser(),$leaveDetail->getLeaveType(), $leaveDetail->getNbDays());

            $em->flush();
			$message = \Swift_Message::newInstance()
			->setSubject('[F3E] Congés refusés')
			->setFrom('webmaster@f3e.asso.fr')
			->setTo('l.delcayrou@f3e.asso.fr')
			->setCc(array('h.hachouche@f3e.asso.fr'))
			->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/reject.html.twig',
                array('entity' => $leaveDetail)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
	    $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('validate'));
        }

        return array(
            'entity' => $leaveDetail,
            'form'   => $form->createView(),
        );    
    }

	/**
     * Cancels a request
     *
     * @Route("/LeaveRequest/{id}/cancelRequest", name="cancel_request")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function cancelRequestAction(Request $request, LeaveDetail $leaveDetail)
    {
        $form = $this->getCancelForm($leaveDetail);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $status_to_update = $em->getRepository('AppBundle:LeaveRequestStatus')->findOneBy(array('name'=>'Annulé'));
            $leaveDetail->setLeaveStatus($status_to_update);
            
            $em->persist($leaveDetail);
           // Re-créditer le solde de congés payés si la demande a été validée... 
			$this->incrementLeaves($leaveDetail->getUser(),$leaveDetail->getLeaveType(), $leaveDetail->getNbDays());

            $em->flush();

            return $this->redirect($this->generateUrl('homepage'));
        }

        return array(
            'entity' => $leaveDetail,
            'form'   => $form->createView(),
        );    
    }
	/**
     * Cancels a request
     *
     * @Route("/LeaveRequest/{id}/cancelLeave", name="cancel_leave")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function cancelLeaveAction(Request $request, LeaveDetail $leaveDetail)
    {
        $form = $this->getCancelLeaveForm($leaveDetail);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $status_to_update = $em->getRepository('AppBundle:LeaveRequestStatus')->findOneBy(array('name'=>'Annulé'));
            $leaveDetail->setLeaveStatus($status_to_update);
            
            $em->persist($leaveDetail);
            // Re-créditer le solde de congés payés si la demande a été validée... 
			$this->incrementLeaves($leaveDetail->getUser(),$leaveDetail->getLeaveType(), $leaveDetail->getNbDays());

            $em->flush();
			$message = \Swift_Message::newInstance()
			->setSubject('[F3E] Congés validés')
			->setFrom('webmaster@f3e.asso.fr')
			->setTo('l.delcayrou@f3e.asso.fr')
			->setCc(array('h.hachouche@f3e.asso.fr'))
			->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/cancelLeave.html.twig',
                array('entity' => $leaveDetail)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
	$this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('homepage'));

            return $this->redirect($this->generateUrl('homepage'));
        }

        return array(
            'entity' => $leaveDetail,
            'form'   => $form->createView(),
        );    
    }
    /**
     * @Route("/LeaveRequest/validate", name="validate")
     * @Template()
     */
    public function validateAction()
    {
		$error_msg = "";
		if(isset($_GET))
		{
			if(isset($_GET['error_message']))
				$error_msg = $_GET['error_message'];	
		}
    	$em = $this->getDoctrine()->getManager();
/*    	$rep = $em->getRepository('AppBundle:LeaveDetail')
			->findBy(array('leaveStatus' => '1'));*/
    	$rep = $em->getRepository('AppBundle:LeaveDetail')
			->findAllWithAL();
    	
    	return array(
    	"data" => $rep,
		"error_msg" => $error_msg, 
		"val"=>"");
    }    
	
	
	 /**
     * @Route("/LeaveRequest/{id}/validate", name="manage_user_leave")
	 * @Method("GET")
     * @Template()
     */
    public function manageUserLeaveAction(User $user)
    {
		$error_msg = "";
		if(isset($_GET))
		{
			if(isset($_GET['error_message']))
				$error_msg = $_GET['error_message'];	
		}
    	$em = $this->getDoctrine()->getManager();

    	$rep = $em->getRepository('AppBundle:LeaveDetail')
			->findAllUserValidatedLeaves($user);
    	
    	return array(
    	"data" => $rep,
		"error_msg" => $error_msg, 
		"val"=>"");
    }    
    
    /**
     * @Route("/LeaveRequest/request", name="request_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function requestAction(Request $request)
    {
    	$entity = new LeaveDetail();
        $form = $this->getNewForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDateProposal(new \DateTime('now'));
            // mise du statut à "en attente"
            $status_to_insert = $em->getRepository('AppBundle:LeaveRequestStatus')->find(1);
            $entity->setLeaveStatus($status_to_insert);
            $start_date = $entity->getStartDate();
            $end_date = $entity->getEndDate();
            // récupération du nombre de jours ouvrés
            $nb_days = 0;
            $nb_days = DateHelper::computeDaysNumber($start_date->getTimeStamp(), $end_date->getTimeStamp());
            // suppression d'une demie-journée en cas de période "après midi" pour le début
            if($entity->getLeaveStartPeriod()->getName() != 'Matin')
            {
            	$nb_days -= 0.5;
            }
            // suppression d'une demie-journée en cas de période "matin" pour la fin
            if($entity->getLeaveEndPeriod()->getName() == 'Matin')
            {
            	$nb_days -= 0.5;
            }
            $entity->setUser($this->getUser());
            $entity->setNbDays(max(0,$nb_days));
            $entity->setComment("");
            try
			{
				$this->decrementLeaves($entity->getUser(),$entity->getLeaveType(), $entity->getNbDays(), 
				$entity->getStartDate(), $entity->getEndDate(), $entity->getLeaveStartPeriod()->getName(), $entity->getLeaveEndPeriod()->getName());
			}
			catch(\Exception $e)
			{
				return $this->redirect($this->generateUrl('request_new', array('error_message'=>$e->getMessage())));
			}
            $em->persist($entity);
            $em->flush();
			$message = \Swift_Message::newInstance()
			->setSubject('[F3E] Nouvelle demande de congés')
			->setFrom('webmaster@f3e.asso.fr')
			->setTo('l.delcayrou@f3e.asso.fr')
			->setCc(array('h.hachouche@f3e.asso.fr'))
			->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/newLeave.html.twig',
                array('entity' => $entity)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
	$this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('homepage'));
        }
		$error_msg = '';
		if(isset($_GET))
		{
			if(isset($_GET['error_message']))
				$error_msg = $_GET['error_message'];	
		}
  $em = $this->getDoctrine()->getManager();
   $ret = $em->getRepository('AppBundle:UserLeaveMonth')
                                ->getAvailableLeaves($this->getUser());




        // Récupération des RTT variables
        return array(
            'entity' => $entity,
			'error_msg'=>$error_msg,
                "CP_N" => $ret['CP_N'],
        "CP_N1" => $ret['CP_N1'],
        "RTT_Fixes" => $ret['RTTF'],
        "RTT_variables" => $ret['RTTV'],   
				'form'   => $form->createView());
       
	}
	    
	 /**
     * Creates a form to create a Device entity.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getNewForm(LeaveDetail $entity)
    {
        $form = $this->createForm(new NewRequest(), $entity, array(
            'action' => $this->generateUrl('request_new'),
            'method' => 'POST',
        ));

        $form->add('Créer', 'submit')
            ->add('Annuler', 'button');

        return $form;
    }
    
	 /**
     * confirmation for request.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getvalidateForm(LeaveDetail $entity)
    {
        $form = $this->createForm(new ValidateRequest(), $entity, array(
            'action' => $this->generateUrl('validate_request', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Valider', 'submit')
            ->add('Annuler', 'button');

        return $form;
    }
    
	 /**
     * rejection for request.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getRejectForm(LeaveDetail $entity)
    {
        $form = $this->createForm(new RejectRequest(), $entity, array(
            'action' => $this->generateUrl('reject_request', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Refuser', 'submit')
            ->add('Annuler', 'button');

        return $form;
    }
    
	 /**
     * cancel for request.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getCancelForm(LeaveDetail $entity)
    {
        $form = $this->createForm(new CancelRequest(), $entity, array(
            'action' => $this->generateUrl('cancel_request', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Confirmer', 'submit')
            ->add('Retour', 'button');

        return $form;
    }
	
	
	 /**
     * cancel for leave.
     *
     * @param Leave $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function getCancelLeaveForm(LeaveDetail $entity)
    {
        $form = $this->createForm(new CancelRequest(), $entity, array(
            'action' => $this->generateUrl('cancel_leave', array('id'=>$entity->getId())),
            'method' => 'POST',
        ));

        $form->add('Confirmer', 'submit')
            ->add('Retour', 'button');

        return $form;
    }	
    
    protected function incrementLeaves($user, $leaveType, $amount)
    {
    	$em = $this->getDoctrine()->getManager();
    	// we check the leaves are available... 

			$userLeaveMonth = $em->getRepository('AppBundle:UserLeaveMonth')
    				->refundLeaves($user, $leaveType, $amount);
    } 
    
    protected function decrementLeaves($user, $leaveType, $amount, $start_date=NULL, $end_date=NULL, $start_period=NULL, $end_period = NULL)
    {
    	$em = $this->getDoctrine()->getManager();
    	// we check the leaves are available... 

			$userLeaveMonth = $em->getRepository('AppBundle:UserLeaveMonth')
    				->checkAvailableLeaves($user, $leaveType, $amount, $start_date, $end_date, $start_period, $end_period);
    	
    	
    	
    }
    
}
