<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BreadCategory
 *
 * @ORM\Table(name="bread_category", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="bread_catalog_id", columns={"bread_catalog_id"})})
 * @ORM\Entity
 */
class BreadCategory
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
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var \Application\Entity\BreadCatalog
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BreadCatalog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bread_catalog_id", referencedColumnName="id")
     * })
     */
    private $breadCatalog;



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
     * @return BreadCategory
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
     * Set breadCatalog
     *
     * @param \Application\Entity\BreadCatalog $breadCatalog
     * @return BreadCategory
     */
    public function setBreadCatalog(\Application\Entity\BreadCatalog $breadCatalog = null)
    {
        $this->breadCatalog = $breadCatalog;

        return $this;
    }

    /**
     * Get breadCatalog
     *
     * @return \Application\Entity\BreadCatalog 
     */
    public function getBreadCatalog()
    {
        return $this->breadCatalog;
    }
}
