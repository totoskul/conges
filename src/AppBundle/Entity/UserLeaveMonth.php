<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLeaveMonth
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserLeaveMonthRepository")
 */
class UserLeaveMonth
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
     * @var float
     *
     * @ORM\Column(name="nbAvailable", type="float")
     */
    private $nbAvailable;

    /**
     * @var float
     *
     * @ORM\Column(name="nbUsed", type="float")
     */
    private $nbUsed;

	/**
	* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	* @ORM\ManyToOne(targetEntity="User")
	*/
    private $user;
    
     /**
     * @ORM\JoinColumn(name="leave_type_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="LeaveType")
     */
    private $leaveType;
 
     
     /**
     * @ORM\JoinColumn(name="time_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="Time")
     */
    private $time;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;
    
    
    

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
     * Set nbAvailable
     *
     * @param integer $nbAvailable
     * @return UserLeaveMonth
     */
    public function setNbAvailable($nbAvailable)
    {
        $this->nbAvailable = $nbAvailable;

        return $this;
    }

    /**
     * Get nbAvailable
     *
     * @return integer 
     */
    public function getNbAvailable()
    {
        return $this->nbAvailable;
    }

    /**
     * Set nbUsed
     *
     * @param integer $nbUsed
     * @return UserLeaveMonth
     */
    public function setNbUsed($nbUsed)
    {
        $this->nbUsed = $nbUsed;

        return $this;
    }

    /**
     * Get nbUsed
     *
     * @return integer 
     */
    public function getNbUsed()
    {
        return $this->nbUsed;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return UserLeaveMonth
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
     * @param \AppBundle\Entity\LeaveType $leaveType
     * @return UserLeaveMonth
     */
    public function setLeaveType(\AppBundle\Entity\LeaveType $leaveType = null)
    {
        $this->leaveType = $leaveType;

        return $this;
    }

    /**
     * Get leaveType
     *
     * @return \AppBundle\Entity\LeaveType 
     */
    public function getLeaveType()
    {
        return $this->leaveType;
    }

    /**
     * Set time
     *
     * @param \AppBundle\Entity\Time $time
     * @return UserLeaveMonth
     */
    public function setTime(\AppBundle\Entity\Time $time = null)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \AppBundle\Entity\Time 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set year
     *
     * @param \integer $year
     * @return UserLeaveMonth
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \integer 
     */
    public function getYear()
    {
        return $this->year;
    }
}
