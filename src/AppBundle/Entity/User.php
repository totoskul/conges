<?php
// src/Acme/UserBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var \string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName = NULL;
    
   /**
     * @var \string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName = NULL;
    
   /**
     * @var \string
     *
     * @ORM\Column(name="serial", type="string", length=50, nullable=true)
     */
    private $serial = NULL;
    
   /**
     * @var \datetime
     *
     * @ORM\Column(name="arrival", type="datetime", nullable=true)
     */
    private $arrival;
   /**
     * @var \datetime
     *
     * @ORM\Column(name="departure", type="datetime", nullable=true)
     */
    private $departure= NULL;
     
    
   	/**
	* @ORM\OneToMany(targetEntity="UserLeaveMonth", mappedBy="user")
	*/
    private $userLeaveMonths;
	
	 /**
     * @ORM\JoinColumn(name="contract_type_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="ContractType")
     */
    private $contractType;
     
	
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return User
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }
     
     
     /**
     * Get concat first and last name
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->firstName .  " " . $this->lastName;
    }

    /**
     * Set arrival
     *
     * @param \DateTime $arrival
     * @return User
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \DateTime 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set departure
     *
     * @param \DateTime $departure
     * @return User
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \DateTime 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Add userLeaveMonths
     *
     * @param \AppBundle\Entity\UserLeaveMonth $userLeaveMonths
     * @return User
     */
    public function addUserLeaveMonth(\AppBundle\Entity\UserLeaveMonth $userLeaveMonths)
    {
        $this->userLeaveMonths[] = $userLeaveMonths;

        return $this;
    }

    /**
     * Remove userLeaveMonths
     *
     * @param \AppBundle\Entity\UserLeaveMonth $userLeaveMonths
     */
    public function removeUserLeaveMonth(\AppBundle\Entity\UserLeaveMonth $userLeaveMonths)
    {
        $this->userLeaveMonths->removeElement($userLeaveMonths);
    }

    /**
     * Get userLeaveMonths
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserLeaveMonths()
    {
        return $this->userLeaveMonths;
    }

    /**
     * Set contractType
     *
     * @param \AppBundle\Entity\ContractType $contractType
     * @return User
     */
    public function setContractType(\AppBundle\Entity\ContractType $contractType = null)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return \AppBundle\Entity\ContractType 
     */
    public function getContractType()
    {
        return $this->contractType;
    }
}
