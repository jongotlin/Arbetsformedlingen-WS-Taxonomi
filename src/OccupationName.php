<?php

namespace ArbetsformedlingenWsTaxonomi;

class OccupationName
{

    /**
     * @var int $OccupationNameID
     */
    protected $OccupationNameID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $LocaleCode
     */
    protected $LocaleCode = null;

    /**
     * @param int $OccupationNameID
     */
    public function __construct($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
    }

    /**
     * @return int
     */
    public function getOccupationNameID()
    {
      return $this->OccupationNameID;
    }

    /**
     * @param int $OccupationNameID
     * @return \ArbetsformedlingenWsTaxonomi\OccupationName
     */
    public function setOccupationNameID($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \ArbetsformedlingenWsTaxonomi\OccupationName
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->LocaleCode;
    }

    /**
     * @param string $LocaleCode
     * @return \ArbetsformedlingenWsTaxonomi\OccupationName
     */
    public function setLocaleCode($LocaleCode)
    {
      $this->LocaleCode = $LocaleCode;
      return $this;
    }

}
