<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Helper\DateHelper;

/**
 * LeaveDetail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LeaveDetailRepository")
 */
class LeaveDetail
{
	

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

     
     /**
     * @ORM\JoinColumn(name="leave_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeaveRequest")
     */
    private $leaveRequest;
    
     /**
     * @ORM\JoinColumn(name="leave_type_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeaveType")
     */
    private $leaveType;
    
     /**
     * @ORM\JoinColumn(name="leave_start_period_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeavePeriod")
     */
    private $leaveStartPeriod;


     /**
     * @ORM\JoinColumn(name="leave_end_period_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeavePeriod")
     */
    private $leaveEndPeriod;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProposal", type="datetime")
     */
    private $dateProposal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateResult", type="datetime", nullable=true)
     */
    private $dateResult;
    
    /**
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;
    
     /**
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeaveRequestStatus")
     */
    private $leaveStatus;
       
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nb_days", type="float")
     */
    private $nb_days;
    
    /**
     * @var \string
     *
     * @ORM\Column(name="comment", type="string", length=4096, nullable=true)
     */
    private $comment = null;
    
    /**
     * @var \string
     *
     * @ORM\Column(name="comment_user", type="string", length=4096, nullable=true)
     */
    private $commentUser = null;    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return LeaveDetail
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set startPeriod
     *
     * @param integer $startPeriod
     * @return LeaveDetail
     */
    public function setStartPeriod($startPeriod)
    {
        $this->startPeriod = $startPeriod;

        return $this;
    }

    /**
     * Get startPeriod
     *
     * @return integer 
     */
    public function getStartPeriod()
    {
        return $this->startPeriod;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return LeaveDetail
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set endPeriod
     *
     * @param integer $endPeriod
     * @return LeaveDetail
     */
    public function setEndPeriod($endPeriod)
    {
        $this->endPeriod = $endPeriod;

        return $this;
    }

    /**
     * Get endPeriod
     *
     * @return integer 
     */
    public function getEndPeriod()
    {
        return $this->endPeriod;
    }


    /**
     * Set leaveRequest
     *
     * @param \AppBundle\Entity\LeaveRequest $leaveRequest
     * @return LeaveDetail
     */
    public function setLeaveRequest(\AppBundle\Entity\LeaveRequest $leaveRequest = null)
    {
        $this->leaveRequest = $leaveRequest;

        return $this;
    }

    /**
     * Get leaveRequest
     *
     * @return \AppBundle\Entity\LeaveRequest 
     */
    public function getLeaveRequest()
    {
        return $this->leaveRequest;
    }

    /**
     * Set leaveType
     *
     * @param \AppBundle\Entity\LeaveType $leaveType
     * @return LeaveDetail
     */
    public function setLeaveType(\AppBundle\Entity\LeaveType $leaveType = null)
    {
        $this->leaveType = $leaveType;

        return $this;
    }

    /**
     * Get leaveType
     *
     * @return string
     */
    public function getLeaveType()
    {
        return $this->leaveType;
    }

    /**
     * Set leavePeriod
     *
     * @param \AppBundle\Entity\LeavePeriod $leavePeriod
     * @return LeaveDetail
     */
    public function setLeavePeriod(\AppBundle\Entity\LeavePeriod $leavePeriod = null)
    {
        $this->leavePeriod = $leavePeriod;

        return $this;
    }

    /**
     * Get leavePeriod
     *
     * @return \AppBundle\Entity\LeavePeriod 
     */
    public function getLeavePeriod()
    {
        return $this->leavePeriod;
    }

    /**
     * Set leaveStartPeriod
     *
     * @param \AppBundle\Entity\LeavePeriod $leaveStartPeriod
     * @return LeaveDetail
     */
    public function setLeaveStartPeriod(\AppBundle\Entity\LeavePeriod $leaveStartPeriod = null)
    {
        $this->leaveStartPeriod = $leaveStartPeriod;

        return $this;
    }

    /**
     * Get leaveStartPeriod
     *
     * @return \AppBundle\Entity\LeavePeriod 
     */
    public function getLeaveStartPeriod()
    {
        return $this->leaveStartPeriod;
    }

    /**
     * Set leaveEndPeriod
     *
     * @param \AppBundle\Entity\LeavePeriod $leaveEndPeriod
     * @return LeaveDetail
     */
    public function setLeaveEndPeriod(\AppBundle\Entity\LeavePeriod $leaveEndPeriod = null)
    {
        $this->leaveEndPeriod = $leaveEndPeriod;

        return $this;
    }

    /**
     * Get leaveEndPeriod
     *
     * @return \AppBundle\Entity\LeavePeriod 
     */
    public function getLeaveEndPeriod()
    {
        return $this->leaveEndPeriod;
    }

    /**
     * Set dateProposal
     *
     * @param \DateTime $dateProposal
     * @return LeaveDetail
     */
    public function setDateProposal($dateProposal)
    {
        $this->dateProposal = $dateProposal;

        return $this;
    }

    /**
     * Get dateProposal
     *
     * @return \DateTime 
     */
    public function getDateProposal()
    {
        return $this->dateProposal;
    }

    /**
     * Set dateResult
     *
     * @param \DateTime $dateResult
     * @return LeaveDetail
     */
    public function setDateResult($dateResult)
    {
        $this->dateResult = $dateResult;

        return $this;
    }

    /**
     * Get dateResult
     *
     * @return \DateTime 
     */
    public function getDateResult()
    {
        return $this->dateResult;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return LeaveDetail
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set leaveStatus
     *
     * @param \AppBundle\Entity\LeaveRequestStatus $leaveStatus
     * @return LeaveDetail
     */
    public function setLeaveStatus(\AppBundle\Entity\LeaveRequestStatus $leaveStatus = null)
    {
        $this->leaveStatus = $leaveStatus;

        return $this;
    }

    /**
     * Get leaveStatus
     *
     * @return \AppBundle\Entity\LeaveRequestStatus 
     */
    public function getLeaveStatus()
    {
        return $this->leaveStatus;
    }

    /**
     * Set nd_days
     *
     * @param float $ndDays
     * @return LeaveDetail
     */
    public function setNbDays($ndDays)
    {
        $this->nb_days = $ndDays;

        return $this;
    }

    /**
     * Get nb_days
     *
     * @return float 
     */
    public function getNbDays()
    {
        return $this->nb_days;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return LeaveDetail
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    /**
     * Renvoie la concat de la date et de la période
     * @return string
     */
     public function getFullStartDate()
     {
     	return DateHelper::translateDay($this->startDate->format("Y-m-d")) . " " .$this->startDate->format("d-m-Y") . " " . $this->getLeaveStartPeriod()->getName();
     }    
     
    /**
     * Renvoie la concat de la date et de la période
     * @return string
     */
     public function getFullEndDate()
     {
     	return DateHelper::translateDay($this->endDate->format("Y-m-d")) . " " .$this->endDate->format("d-m-Y") . " " . $this->getLeaveEndPeriod()->getName();
     }

    /**
     * Set commentUser
     *
     * @param string $commentUser
     * @return LeaveDetail
     */
    public function setCommentUser($commentUser)
    {
        $this->commentUser = $commentUser;

        return $this;
    }

    /**
     * Get commentUser
     *
     * @return string 
     */
    public function getCommentUser()
    {
        return $this->commentUser;
    }
}
