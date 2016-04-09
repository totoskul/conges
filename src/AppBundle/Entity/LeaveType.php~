<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeaveType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LeaveTypeRepository")
 */
class LeaveType
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

	/**
     * @var string
     *
     * @ORM\Column(name="unique_name", type="string", length=255)
     */
    private $unique_name;
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
     * @return leaveType
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
     * Set unique_name
     *
     * @param string $uniqueName
     * @return LeaveType
     */
    public function setUniqueName($uniqueName)
    {
        $this->unique_name = $uniqueName;

        return $this;
    }

    /**
     * Get unique_name
     *
     * @return string 
     */
    public function getUniqueName()
    {
        return $this->unique_name;
    }
}
