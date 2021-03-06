<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Config\Definition\Exception\Exception;
use AppBundle\Entity\User;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * UserLeaveMonthRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserLeaveMonthRepository extends EntityRepository
{
	public function getEveryAvailableLeaves()
	{
		$sql = "
		SELECT a.user_id, b.unique_name, sum(a.nbAvailable - a.nbUsed) as	amount FROM `UserLeaveMonth` a 
join LeaveType b on b.id = a.leave_type_id


WHERE  1
group by a.user_id, a.leave_type_id
		
		";
		$rsm = new ResultSetMapping;
		$rsm->addScalarResult('user_id', 'user_id');
		$rsm->addScalarResult('unique_name', 'unique_name');
		$rsm->addScalarResult('amount', 'amount');
		$query = $this->_em->createNativeQuery($sql, $rsm);
		return $query->getResult();
		
	}
	
	public function getAvailableLeaves(User $user)
	{
		$return_array = array("CP_N"=>0, "CP_N1"=>0, "RTTF"=>0, "RTTV"=>0);
		$ret =  $this->findBy(array('user'=>$user));
		$year = date("Y");
		$i = 0;
		foreach($ret as $leave)
		{
			switch ($leave->getLeaveType()->getUniqueName())
			{
				case "CP": 
					if($leave->getYear() == -1)
					{
						$return_array['CP_N1'] += $leave->getNbAvailable() - $leave->getNbUsed();
					}
					if($leave->getYear() == 0)
					{
						$return_array['CP_N'] += $leave->getNbAvailable() - $leave->getNbUsed();
					}
					
					break;
				case "RTTF": 
					$return_array['RTTF'] += $leave->getNbAvailable() - $leave->getNbUsed();
					break;
				case "RTTV": 
					$return_array['RTTV'] += $leave->getNbAvailable() - $leave->getNbUsed();
					break;
				default:
			}
		}
		return $return_array;
	}
	
	public function getAllAvailableLeaves(User $user)
	{
		$return_array = array("CP"=>0, "RTTF"=>0, "RTTV"=>0);
		$ret =  $this->findBy(array('user'=>$user));
		$year = date("Y");
		$i = 0;
		foreach($ret as $leave)
		{
			switch ($leave->getLeaveType()->getUniqueName())
			{
				case "CP": 
					$return_array['CP'] += $leave->getNbAvailable() - $leave->getNbUsed();
					
					break;
				case "RTTF": 
					$return_array['RTTF'] += $leave->getNbAvailable() - $leave->getNbUsed();
					break;
				case "RTTV": 
					$return_array['RTTV'] += $leave->getNbAvailable() - $leave->getNbUsed();
					break;
				default:
			}
		}
		return $return_array;
	}
	
	public function checkAvailableLeaves($user, $leaveType, $amount, $start_date, $end_date, $start_period=NULL, $end_period=NULL)
	{
		$ret =  $this->findBy(array('user'=>$user, 'leaveType'=>$leaveType), array('time'=> 'ASC'));
		$available = 0;
		$em = $this->getEntityManager();
		
		// on vérifie qu'on ne prend pas plus de 5 RTT
		if($leaveType->getUniqueName() == 'RTTV')
		{
			if($amount > 5)
				throw new \Exception('Pas plus de 5 RTT en une seule fois !');
		}		
		
		// on vérifie qu'on ne prend pas plus de 1 RTT F
		if($leaveType->getUniqueName() == 'RTTF' )
		{
			if($amount > 1)
				throw new \Exception('Pas plus de 1 RTT fixe par mois !');
		}	
		
		// on récupère le statut des congés pris
		$em = $this->getEntityManager();
        $rtt_structure = $em->getRepository('AppBundle:LeaveDetail')->getValidLeaveStructure($user);
		
            	
		// on ne peut pas poser plus de 6 RTTV sur le semestre 1 
		// et pas plus de 9 sur le semestre 2
		if($leaveType->getUniqueName() == 'RTTV')
		{
			$retour  = $this->splitS1S2($start_date, $end_date, $start_period, $end_period, $amount);	
			if($rtt_structure['RTTV']['S1']+$retour['S1'] > 6 ||$rtt_structure['RTTV']['S2']+$retour['S2']>9 )
			{
				throw new \Exception('Pas plus de 6 RTT variables par semestre');
			}
		}
		
		// RTT fixes, vérifier qu'on n'a pas déjà pris un RTT fixe sur le mois en question
		$month = date("m", strtotime($start_date->format('Y-m-d H:i:s')));
		if($leaveType->getUniqueName() == 'RTTF')
		{
			foreach($rtt_structure['RTTF'] as $mon => $rttf)
			{
				if($mon == $month)
				{
					if($amount + $rttf>1)
						throw new \Exception('Pas plus d\'un seul RTT fixe par mois.');
				}
			}
		}
		$ret =  $this->findBy(array('user'=>$user, 'leaveType'=>$leaveType), array('time'=> 'ASC'));
		$available = 0;
		$em = $this->getEntityManager();
		
		foreach($ret as $leave)
		{
			$available_amount =$leave->getNbAvailable() - $leave->getNbUsed(); 
			$available += $available_amount;
		}
		// on vérifie que le titulaire a bien la bonne volumétrie de congés disponibles
		if($available < $amount)
			throw new \Exception('Pas assez de congés ! Disponibles : '.$available.' demandés : '.$amount);
		
		// on décrémente en commençant par les plus vieux congés... 
		$ret =  $this->findBy(array('user'=>$user, 'leaveType'=>$leaveType), array('time'=> 'ASC'));
		foreach($ret as $leave)
		{
			$available_amount =$leave->getNbAvailable() - $leave->getNbUsed(); 
			if($amount >0)
			{
				if($available_amount <= $amount)
				{
					$leave->setNbUsed($leave->getNbAvailable());
					$amount -= $available_amount;
				}
				else
				{
					$leave->setNbUsed($leave->getNbUsed()+$amount);
					$amount = 0;
				}
			}
			$em->persist($leave);
            
			
		}
		
		$em->flush();
	}
	
	private function splitS1S2($start_date, $end_date, $start_period, $end_period, $nbDays)
	{
		$rtt_v_array = array();
		$rtt_v_array['S1'] = 0;
		$rtt_v_array['S2'] = 0;
		$m1 = date("m",strtotime($start_date->format('Y-m-d H:i:s')));
		$m2 = date("m",strtotime($end_date->format('Y-m-d H:i:s')));
		if($m1 != $m2)
		{
			// on calcule le nombre de jours entre le premier jour de la demande de congés et le dernier jour du mois en question
			// on crée un datetime pour ça. 
			$last_day = new \DateTime(date("Y-m-t",strtotime($start_date->format('Y-m-d H:i:s'))));
			$first_day = new \DateTime(date("Y-m-01",strtotime($end_date->format('Y-m-d H:i:s'))));
			$nb_days_m1 = DateHelper::computeDaysNumber($start_date->getTimeStamp(), 
			$last_day->getTimeStamp());
			switch($m1)
			{
				case '01':
				case '02':
				case '03':
				case '04':
				case '05':
				case '06':
					$rtt_v_array['S1'] += $nb_days_m1;
					if($start_period != 'Matin')
					{
						$rtt_v_array['S1'] -= 0.5;
					}
					break;
				default:
					$rtt_v_array['S2'] += $nb_days_m1;
					if($start_period != 'Matin')
					{
						$rtt_v_array['S2'] -= 0.5;
					}
					break;				
			}
			// on calcule le nombre de jours entre le premier jour du mois et le dernier jour de la demande de congés
			$nb_days_m2 = DateHelper::computeDaysNumber($first_day->getTimeStamp(),$end_date()->getTimeStamp());
			switch($m2)
			{
				case '01':
				case '02':
				case '03':
				case '04':
				case '05':
				case '06':
					$rtt_v_array['S1'] += $nb_days_m2;
					// gestion des demi journées
				if($end_period->getName() == 'Matin')
					{
						$rtt_v_array['S1'] -= 0.5;
					}
					
					break;
				default:
					$rtt_v_array['S2'] += $nb_days_m2;
					// gestion des demi journées
					// suppression d'une demie-journée en cas de période "matin" pour la fin
					if($end_period == 'Matin')
					{
						$rtt_v_array['S2'] -= 0.5;
					}
					
					
					break;				
			}
			
		}	
		else
		{
			// cas nominal, début et fin sur le même mois
			$m1 =  date("m",strtotime($start_date->format('Y-m-d H:i:s')));
			switch($m1)
			{
			case '01':
				case '02':
				case '03':
				case '04':
				case '05':
				case '06':
					$rtt_v_array['S1'] += $nbDays;
					
					break;
				default:
					$rtt_v_array['S2'] += $nbDays;
					
					break;				
			}
		}
		return $rtt_v_array;
	}
	
	public function refundLeaves($user, $leaveType, $amount)
	{
		
		
		// on incrémente en commençant par les plus récents congés... 
		$ret =  $this->findBy(array('user'=>$user, 'leaveType'=>$leaveType), array('time'=> 'DESC'));
		$em = $this->getEntityManager();
		foreach($ret as $leave)
		{
			$available_amount =$leave->getNbAvailable() - $leave->getNbUsed();
			$nb_used = $leave->getNbUsed();
			if($amount >0 && $leave->getNbUsed() > 0)
			{
				if($amount  > $leave->getNbUsed())
				{
					$leave->setNbUsed(0);
					$amount -= $nb_used;
				}
				else
				{
					$leave->setNbUsed($leave->getNbUsed()-$amount);
					$amount = 0;
				}
			}
			$em->persist($leave);
            
			
		}
		
		$em->flush();
	}
	
	public function findUserRTTV($user, $year)
	{
		$result =  $this->createQueryBuilder('lm')
			->addSelect( 't')
			->join('lm.time', 't')
            ->where('lm.leaveType = 2 and t.year = :year and lm.user = :id_user')
			->setParameter('id_user', $user->getId())
			->setParameter('year', $year)
			->getQuery()->getResult();
		foreach($result as $res)
		{
			return $res->getId();
		}
		return $result;
	}
		
	public function findUserRTTF($user, $year)
	{
		$result =  $this->createQueryBuilder('lm')
			->addSelect( 't')
			->join('lm.time', 't')
            ->where('lm.leaveType = 3 and t.year = :year and lm.user = :id_user')
			->setParameter('id_user', $user->getId())
			->setParameter('year', $year)
			->getQuery()->getResult();
		foreach($result as $res)
		{
			return $res->getId();
		}
		return $result;
	}
}
