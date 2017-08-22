<?php

namespace RationalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepartmentEmployee
 *
 * @ORM\Table(name="dept_emp")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class DepartmentEmployee
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
     * @ORM\ManyToOne(targetEntity="RationalBundle\Entity\Employee", inversedBy="department")
     * @ORM\JoinColumn(name="dept_no", referencedColumnName="dept_no")
     */
    private $deptNo;

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
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return DepartmentEmployee
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
     * @return DepartmentEmployee
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
     * @return DepartmentEmployee
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

    /**
     * Set deptNo
     *
     * @param \RationalBundle\Entity\Employee $deptNo
     * @return DepartmentEmployee
     */
    public function setDeptNo(\RationalBundle\Entity\Employee $deptNo = null)
    {
        $this->deptNo = $deptNo;

        return $this;
    }

    /**
     * Get deptNo
     *
     * @return \RationalBundle\Entity\Employee 
     */
    public function getDeptNo()
    {
        return $this->deptNo;
    }
}
