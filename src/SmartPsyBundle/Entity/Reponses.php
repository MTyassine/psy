<?php

namespace SmartPsyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="quest", columns={"quest"})})
 * @ORM\Entity(repositoryClass="SmartPsyBundle\Repository\ReponsesRepository")
 */
class Reponses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \SmartPsyBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="quest")
     * })
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500, nullable=false)
     */
    private $texte;


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
     * Set score
     *
     * @param integer $score
     * @return Reponses
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Reponses
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @return \Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param \Question $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->texte;
    }


}
