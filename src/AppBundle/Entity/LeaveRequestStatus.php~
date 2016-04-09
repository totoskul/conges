<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeaveRequestStatus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LeaveRequestStatusRepository")
 */
class LeaveRequestStatus
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="granted", type="smallint")
     */
    private $granted;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50)
     */
    private $color;


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
     * Set name
     *
     * @param string $name
     * @return LeaveRequestStatus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set granted
     *
     * @param integer $granted
     * @return LeaveRequestStatus
     */
    public function setGranted($granted)
    {
        $this->granted = $granted;

        return $this;
    }

    /**
     * Get granted
     *
     * @return integer 
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return LeaveRequestStatus
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
}
