<?php

namespace RationalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title
 *
 * @ORM\Table(name="titles")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Title
{
    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="RationalBundle\Entity\Employee", inversedBy="employee")
     * @ORM\JoinColumn(name="emp_no", referencedColumnName="emp_no")
     */
    private $empNo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from_date", type="date")
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to_date", type="date")
     */
    private $toDate;


    /**
     * Set title
     *
     * @param string $title
     * @return Title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return Title
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     * @return Title
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set empNo
     *
     * @param \RationalBundle\Entity\Employee $empNo
     * @return Title
     */
    public function setEmpNo(\RationalBundle\Entity\Employee $empNo = null)
    {
        $this->empNo = $empNo;

        return $this;
    }

    /**
     * Get empNo
     *
     * @return \RationalBundle\Entity\Employee 
     */
    public function getEmpNo()
    {
        return $this->empNo;
    }
}
