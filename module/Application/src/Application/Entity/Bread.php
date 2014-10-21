<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bread
 *
 * @ORM\Table(name="bread", indexes={@ORM\Index(name="bread_category_id", columns={"bread_category_id"}), @ORM\Index(name="bread_country_id", columns={"bread_country_id"}), @ORM\Index(name="bread_trade_mark_id", columns={"bread_trade_mark_id"})})
 * @ORM\Entity
 */
class Bread
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="smallint", nullable=false)
     */
    private $weight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var \Application\Entity\BreadCategory
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BreadCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bread_category_id", referencedColumnName="id")
     * })
     */
    private $breadCategory;

    /**
     * @var \Application\Entity\BreadCountry
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BreadCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bread_country_id", referencedColumnName="id")
     * })
     */
    private $breadCountry;

    /**
     * @var \Application\Entity\BreadTradeMark
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BreadTradeMark")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bread_trade_mark_id", referencedColumnName="id")
     * })
     */
    private $breadTradeMark;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Bread
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Bread
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Bread
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set breadCategory
     *
     * @param \Application\Entity\BreadCategory $breadCategory
     * @return Bread
     */
    public function setBreadCategory(\Application\Entity\BreadCategory $breadCategory = null)
    {
        $this->breadCategory = $breadCategory;

        return $this;
    }

    /**
     * Get breadCategory
     *
     * @return \Application\Entity\BreadCategory 
     */
    public function getBreadCategory()
    {
        return $this->breadCategory;
    }

    /**
     * Set breadCountry
     *
     * @param \Application\Entity\BreadCountry $breadCountry
     * @return Bread
     */
    public function setBreadCountry(\Application\Entity\BreadCountry $breadCountry = null)
    {
        $this->breadCountry = $breadCountry;

        return $this;
    }

    /**
     * Get breadCountry
     *
     * @return \Application\Entity\BreadCountry 
     */
    public function getBreadCountry()
    {
        return $this->breadCountry;
    }

    /**
     * Set breadTradeMark
     *
     * @param \Application\Entity\BreadTradeMark $breadTradeMark
     * @return Bread
     */
    public function setBreadTradeMark(\Application\Entity\BreadTradeMark $breadTradeMark = null)
    {
        $this->breadTradeMark = $breadTradeMark;

        return $this;
    }

    /**
     * Get breadTradeMark
     *
     * @return \Application\Entity\BreadTradeMark 
     */
    public function getBreadTradeMark()
    {
        return $this->breadTradeMark;
    }
}
