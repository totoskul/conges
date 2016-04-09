<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeaveRequest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LeaveRequestRepository")
 */
class LeaveRequest
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
     * @ORM\Column(name="dateProposal", type="datetime")
     */
    private $dateProposal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateResult", type="datetime")
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
    private $leaveType;
    
    


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
     * Set dateProposal
     *
     * @param \DateTime $dateProposal
     * @return LeaveRequest
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
     * @return LeaveRequest
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
     * @return LeaveRequest
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
     * Set leaveType
     *
     * @param \AppBundle\Entity\LeaveRequestStatus $leaveType
     * @return LeaveRequest
     */
    public function setLeaveType(\AppBundle\Entity\LeaveRequestStatus $leaveType = null)
    {
        $this->leaveType = $leaveType;

        return $this;
    }

    /**
     * Get leaveType
     *
     * @return \AppBundle\Entity\LeaveRequestStatus 
     */
    public function getLeaveType()
    {
        return $this->leaveType;
    }
}
