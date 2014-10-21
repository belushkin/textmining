<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BreadStatistics
 *
 * @ORM\Table(name="bread_statistics", indexes={@ORM\Index(name="bread_shop_id", columns={"bread_shop_id"})})
 * @ORM\Entity
 */
class BreadStatistics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=70, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var \Application\Entity\BreadShop
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BreadShop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bread_shop_id", referencedColumnName="id")
     * })
     */
    private $breadShop;



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
     * Set name
     *
     * @param string $name
     * @return BreadStatistics
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
     * @param string $price
     * @return BreadStatistics
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BreadStatistics
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
     * Set breadShop
     *
     * @param \Application\Entity\BreadShop $breadShop
     * @return BreadStatistics
     */
    public function setBreadShop(\Application\Entity\BreadShop $breadShop = null)
    {
        $this->breadShop = $breadShop;

        return $this;
    }

    /**
     * Get breadShop
     *
     * @return \Application\Entity\BreadShop 
     */
    public function getBreadShop()
    {
        return $this->breadShop;
    }
}
