<?php

namespace ArbetsformedlingenWsTaxonomi;

class EURegionCustom
{

    /**
     * @var int $EURegionID
     */
    protected $EURegionID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $NationalNUTSLevel3Code
     */
    protected $NationalNUTSLevel3Code = null;

    /**
     * @param int $EURegionID
     */
    public function __construct($EURegionID)
    {
      $this->EURegionID = $EURegionID;
    }

    /**
     * @return int
     */
    public function getEURegionID()
    {
      return $this->EURegionID;
    }

    /**
     * @param int $EURegionID
     * @return \ArbetsformedlingenWsTaxonomi\EURegion
     */
    public function setEURegionID($EURegionID)
    {
      $this->EURegionID = $EURegionID;
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
     * @return \ArbetsformedlingenWsTaxonomi\EURegion
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationalNUTSLevel3Code()
    {
      return $this->NationalNUTSLevel3Code;
    }

    /**
     * @param string $NationalNUTSLevel3Code
     * @return \ArbetsformedlingenWsTaxonomi\EURegion
     */
    public function setNationalNUTSLevel3Code($NationalNUTSLevel3Code)
    {
      $this->NationalNUTSLevel3Code = $NationalNUTSLevel3Code;
      return $this;
    }

}
