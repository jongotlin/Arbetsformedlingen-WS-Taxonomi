<?php

namespace ArbetsformedlingenWsTaxonomi;

class CountryCustom
{

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CountryCodeAlpha3
     */
    protected $CountryCodeAlpha3 = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $ContinentID
     */
    protected $ContinentID = null;

    /**
     * @param int $CountryID
     * @param int $ContinentID
     */
    public function __construct($CountryID, $ContinentID)
    {
      $this->CountryID = $CountryID;
      $this->ContinentID = $ContinentID;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return \ArbetsformedlingenWsTaxonomi\Country
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \ArbetsformedlingenWsTaxonomi\Country
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCodeAlpha3()
    {
      return $this->CountryCodeAlpha3;
    }

    /**
     * @param string $CountryCodeAlpha3
     * @return \ArbetsformedlingenWsTaxonomi\Country
     */
    public function setCountryCodeAlpha3($CountryCodeAlpha3)
    {
      $this->CountryCodeAlpha3 = $CountryCodeAlpha3;
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
     * @return \ArbetsformedlingenWsTaxonomi\Country
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return int
     */
    public function getContinentID()
    {
      return $this->ContinentID;
    }

    /**
     * @param int $ContinentID
     * @return \ArbetsformedlingenWsTaxonomi\Country
     */
    public function setContinentID($ContinentID)
    {
      $this->ContinentID = $ContinentID;
      return $this;
    }

}
