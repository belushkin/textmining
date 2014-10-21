<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BreadCountry
 *
 * @ORM\Table(name="bread_country", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class BreadCountry
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
     * @return BreadCountry
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
}
