<?php

namespace RationalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="departments")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Department
{
    /**
     * @var string
     *
     * @ORM\Column(name="dept_no", type="string", length=4)
     * @ORM\Id
     */
    private $deptNo;

    /**
     * @var string
     *
     * @ORM\Column(name="dept_name", type="string", length=40, unique=true)
     */
    private $deptName;


    /**
     * Set deptNo
     *
     * @param string $deptNo
     * @return Department
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;

        return $this;
    }

    /**
     * Get deptNo
     *
     * @return string 
     */
    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * Set deptName
     *
     * @param string $deptName
     * @return Department
     */
    public function setDeptName($deptName)
    {
        $this->deptName = $deptName;

        return $this;
    }

    /**
     * Get deptName
     *
     * @return string 
     */
    public function getDeptName()
    {
        return $this->deptName;
    }
}
