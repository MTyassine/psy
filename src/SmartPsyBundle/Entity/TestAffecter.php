<?php

namespace SmartPsyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestAffecter
 *
 * @ORM\Table(name="test_affecter", indexes={@ORM\Index(name="id_psy", columns={"psy"}), @ORM\Index(name="id_patient", columns={"patient"}), @ORM\Index(name="id_test", columns={"test"})})
 * @ORM\Entity(repositoryClass="SmartPsyBundle\Repository\TestAffecterRepository")
 */
class TestAffecter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_affectation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="psy", referencedColumnName="id")
     * })
     */
    private $psy;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="patient", referencedColumnName="id")
     * })
     */
    private $patient;

    /**
     * @var \SmartPsyBundle\Entity\Test
     *
     * @ORM\ManyToOne(targetEntity="SmartPsyBundle\Entity\Test")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="test", referencedColumnName="id_test")
     * })
     */
    private $test;

    /**
     * @var string
     *
     * @ORM\Column(name="date_affect", type="string", length=20, nullable=false)
     */
    private $dateAffect;

    /**
     * @var integer
     *
     * @ORM\Column(name="passage", type="integer", nullable=false)
     */
    private $passage;

    /**
     * @var string
     *
     * @ORM\Column(name="date_passage", type="string", length=20, nullable=false)
     */
    private $datePassage;


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
     * Set dateAffect
     *
     * @param string $dateAffect
     * @return TestAffecter
     */
    public function setDateAffect($dateAffect)
    {
        $this->dateAffect = $dateAffect;

        return $this;
    }

    /**
     * Get dateAffect
     *
     * @return string 
     */
    public function getDateAffect()
    {
        return $this->dateAffect;
    }

    /**
     * Set passage
     *
     * @param integer $passage
     * @return TestAffecter
     */
    public function setPassage($passage)
    {
        $this->passage = $passage;

        return $this;
    }

    /**
     * Get passage
     *
     * @return integer
     */
    public function getPassage()
    {
        return $this->passage;
    }

    /**
     * Set datePassage
     *
     * @param string $datePassage
     * @return TestAffecter
     */
    public function setDatePassage($datePassage)
    {
        $this->datePassage = $datePassage;

        return $this;
    }

    /**
     * Get datePassage
     *
     * @return string 
     */
    public function getDatePassage()
    {
        return $this->datePassage;
    }

    /**
     * @return \UserBundle\Entity\User
     */
    public function getPsy()
    {
        return $this->psy;
    }

    /**
     * @param \UserBundle\Entity\User $psy
     */
    public function setPsy($psy)
    {
        $this->psy = $psy;
    }

    /**
     * @return \UserBundle\Entity\User
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \UserBundle\Entity\User $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return Test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param Test $test
     */
    public function setTest($test)
    {
        $this->test = $test;
    }


}
