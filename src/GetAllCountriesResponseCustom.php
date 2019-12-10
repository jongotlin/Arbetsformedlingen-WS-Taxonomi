<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllCountriesResponseCustom
{

    /**
     * @var ArrayOfCountry $GetAllCountriesResult
     */
    protected $GetAllCountriesResult = null;

    /**
     * @param ArrayOfCountry $GetAllCountriesResult
     */
    public function __construct($GetAllCountriesResult)
    {
      $this->GetAllCountriesResult = $GetAllCountriesResult;
    }

    /**
     * @return ArrayOfCountry
     */
    public function getGetAllCountriesResult()
    {
      return $this->GetAllCountriesResult;
    }

    /**
     * @param ArrayOfCountry $GetAllCountriesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllCountriesResponse
     */
    public function setGetAllCountriesResult($GetAllCountriesResult)
    {
      $this->GetAllCountriesResult = $GetAllCountriesResult;
      return $this;
    }

}
