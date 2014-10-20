<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bread
 *
 * @ORM\Table(name="bread", indexes={@ORM\Index(name="bread_category_id", columns={"bread_category_id"})})
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
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

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
     * Set price
     *
     * @param float $price
     * @return Bread
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
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
}
