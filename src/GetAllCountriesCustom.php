<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllCountriesCustom
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $languageId
     */
    public function __construct($languageId)
    {
      $this->languageId = $languageId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetAllCountries
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
