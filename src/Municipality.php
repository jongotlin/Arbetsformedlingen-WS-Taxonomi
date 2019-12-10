<?php

namespace ArbetsformedlingenWsTaxonomi;

class Municipality
{

    /**
     * @var int $MunicipalityID
     */
    protected $MunicipalityID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $NationalNUTSLAU2Code
     */
    protected $NationalNUTSLAU2Code = null;

    /**
     * @var string $NationalNUTSLevel3Code
     */
    protected $NationalNUTSLevel3Code = null;

    /**
     * @param int $MunicipalityID
     */
    public function __construct($MunicipalityID)
    {
      $this->MunicipalityID = $MunicipalityID;
    }

    /**
     * @return int
     */
    public function getMunicipalityID()
    {
      return $this->MunicipalityID;
    }

    /**
     * @param int $MunicipalityID
     * @return \ArbetsformedlingenWsTaxonomi\Municipality
     */
    public function setMunicipalityID($MunicipalityID)
    {
      $this->MunicipalityID = $MunicipalityID;
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
     * @return \ArbetsformedlingenWsTaxonomi\Municipality
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationalNUTSLAU2Code()
    {
      return $this->NationalNUTSLAU2Code;
    }

    /**
     * @param string $NationalNUTSLAU2Code
     * @return \ArbetsformedlingenWsTaxonomi\Municipality
     */
    public function setNationalNUTSLAU2Code($NationalNUTSLAU2Code)
    {
      $this->NationalNUTSLAU2Code = $NationalNUTSLAU2Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\Municipality
     */
    public function setNationalNUTSLevel3Code($NationalNUTSLevel3Code)
    {
      $this->NationalNUTSLevel3Code = $NationalNUTSLevel3Code;
      return $this;
    }

}
