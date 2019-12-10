<?php

namespace ArbetsformedlingenWsTaxonomi;

class PostCode
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $PostLocalityID
     */
    protected $PostLocalityID = null;

    /**
     * @var string $PostLocality
     */
    protected $PostLocality = null;

    /**
     * @var string $NationalNUTSLAU2Code
     */
    protected $NationalNUTSLAU2Code = null;

    /**
     * @var boolean $KeyAccount
     */
    protected $KeyAccount = null;

    /**
     * @param int $PostLocalityID
     * @param boolean $KeyAccount
     */
    public function __construct($PostLocalityID, $KeyAccount)
    {
      $this->PostLocalityID = $PostLocalityID;
      $this->KeyAccount = $KeyAccount;
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
     * @return \ArbetsformedlingenWsTaxonomi\PostCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostLocalityID()
    {
      return $this->PostLocalityID;
    }

    /**
     * @param int $PostLocalityID
     * @return \ArbetsformedlingenWsTaxonomi\PostCode
     */
    public function setPostLocalityID($PostLocalityID)
    {
      $this->PostLocalityID = $PostLocalityID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostLocality()
    {
      return $this->PostLocality;
    }

    /**
     * @param string $PostLocality
     * @return \ArbetsformedlingenWsTaxonomi\PostCode
     */
    public function setPostLocality($PostLocality)
    {
      $this->PostLocality = $PostLocality;
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
     * @return \ArbetsformedlingenWsTaxonomi\PostCode
     */
    public function setNationalNUTSLAU2Code($NationalNUTSLAU2Code)
    {
      $this->NationalNUTSLAU2Code = $NationalNUTSLAU2Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyAccount()
    {
      return $this->KeyAccount;
    }

    /**
     * @param boolean $KeyAccount
     * @return \ArbetsformedlingenWsTaxonomi\PostCode
     */
    public function setKeyAccount($KeyAccount)
    {
      $this->KeyAccount = $KeyAccount;
      return $this;
    }

}
