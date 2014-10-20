<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoogleSuggestions
 *
 * @ORM\Table(name="google_suggestions")
 * @ORM\Entity
 */
class GoogleSuggestions
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
     * @ORM\Column(name="keyword", type="string", length=20, nullable=false)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestions", type="string", length=100, nullable=false)
     */
    private $suggestions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';



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
     * Set keyword
     *
     * @param string $keyword
     * @return GoogleSuggestions
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set suggestions
     *
     * @param string $suggestions
     * @return GoogleSuggestions
     */
    public function setSuggestions($suggestions)
    {
        $this->suggestions = $suggestions;

        return $this;
    }

    /**
     * Get suggestions
     *
     * @return string 
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return GoogleSuggestions
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
}
