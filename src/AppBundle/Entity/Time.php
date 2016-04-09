<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Time
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TimeRepository")
 */
class Time
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
     * @ORM\Column(name="timeName", type="string", length=6)
     */
    private $timeName;

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=2)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=4)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="monthName", type="string", length=20)
     */
    private $monthName;




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
     * Set timeName
     *
     * @param string $timeName
     * @return Time
     */
    public function setTimeName($timeName)
    {
        $this->timeName = $timeName;

        return $this;
    }

    /**
     * Get timeName
     *
     * @return string 
     */
    public function getTimeName()
    {
        return $this->timeName;
    }

    /**
     * Set month
     *
     * @param string $month
     * @return Time
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string 
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return Time
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set monthName
     *
     * @param string $monthName
     * @return Time
     */
    public function setMonthName($monthName)
    {
        $this->monthName = $monthName;

        return $this;
    }

    /**
     * Get monthName
     *
     * @return string 
     */
    public function getMonthName()
    {
        return $this->monthName;
    }
}
