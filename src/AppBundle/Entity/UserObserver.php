<?php
// src/Acme/UserBundle/Entity/UserObserver.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="UserObserver")
 */
class UserObserver
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ORM\OneToMany(targetEntity="User", mappedBy="User")
     */
    private $user;
    
    
	
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

}
