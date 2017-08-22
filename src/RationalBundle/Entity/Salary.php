<?php

namespace RationalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salary
 *
 * @ORM\Table(name="salaries")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Salary
{
    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="RationalBundle\Entity\Employee", inversedBy="employee")
     * @ORM\JoinColumn(name="emp_no", referencedColumnName="emp_no")
     */
    private $empNo;

    /**
     * @var int
     *
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

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
     * Set salary
     *
     * @param integer $salary
     * @return Salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return Salary
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
     * @return Salary
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
     * @return Salary
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
