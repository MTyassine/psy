<?php

namespace SmartPsyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="id_patient", columns={"patient"}), @ORM\Index(name="id_psy", columns={"psy"})})
 * @ORM\Entity(repositoryClass="SmartPsyBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer")
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
     * @var integer
     *
     * @ORM\Column(name="accept", type="integer")
     */
    private $accept;


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
     * Set accept
     *
     * @param integer $accept
     * @return Contact
     */
    public function setAccept($accept)
    {
        $this->accept = $accept;

        return $this;
    }

    /**
     * Get accept
     *
     * @return integer 
     */
    public function getAccept()
    {
        return $this->accept;
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


}
