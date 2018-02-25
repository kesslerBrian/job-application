<?php

namespace TaxesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="TaxesBundle\Repository\articlesRepository")
 */
class articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="labelName", type="string", length=100)
     */
    private $labelName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="amountHt", type="float")
     */
    private $amountHt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;


    /**
     * Construnct function
     */
    public function __construct(){
        $this->creation = new \DateTime();
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set labelName
     *
     * @param string $labelName
     *
     * @return articles
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;

        return $this;
    }

    /**
     * Get labelName
     *
     * @return string
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return articles
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amountHt
     *
     * @param float $amountHt
     *
     * @return articles
     */
    public function setAmountHt($amountHt)
    {
        $this->amountHt = $amountHt;

        return $this;
    }

    /**
     * Get amountHt
     *
     * @return float
     */
    public function getAmountHt()
    {
        return $this->amountHt;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return articles
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Return TTC value with TVA 17%
     * @return float
     */
    public function getTaxeOne(){
        return $this->getAmountHt() * 1.17;
    }

    /**
     * Return TTC value with TVA 3%
     * @return float
     */
    public function getTaxeTwo(){
        return $this->getAmountHt() * 1.03;
    }
}
