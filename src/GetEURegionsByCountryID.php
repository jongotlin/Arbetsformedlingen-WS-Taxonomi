<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetEURegionsByCountryID
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @param int $languageId
     * @param int $countryId
     */
    public function __construct($languageId, $countryId)
    {
      $this->languageId = $languageId;
      $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
      return $this->languageId;
    }

    /**
     * @param int $languageId
     * @return \ArbetsformedlingenWsTaxonomi\GetEURegionsByCountryID
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \ArbetsformedlingenWsTaxonomi\GetEURegionsByCountryID
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

}
