<?php

namespace ArbetsformedlingenWsTaxonomi;

class UnemploymentBenefitSociety
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \ArbetsformedlingenWsTaxonomi\UnemploymentBenefitSociety
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \ArbetsformedlingenWsTaxonomi\UnemploymentBenefitSociety
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ArbetsformedlingenWsTaxonomi\UnemploymentBenefitSociety
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
