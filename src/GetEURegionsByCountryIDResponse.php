<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetEURegionsByCountryIDResponse
{

    /**
     * @var ArrayOfEURegion $GetEURegionsByCountryIDResult
     */
    protected $GetEURegionsByCountryIDResult = null;

    /**
     * @param ArrayOfEURegion $GetEURegionsByCountryIDResult
     */
    public function __construct($GetEURegionsByCountryIDResult)
    {
      $this->GetEURegionsByCountryIDResult = $GetEURegionsByCountryIDResult;
    }

    /**
     * @return ArrayOfEURegion
     */
    public function getGetEURegionsByCountryIDResult()
    {
      return $this->GetEURegionsByCountryIDResult;
    }

    /**
     * @param ArrayOfEURegion $GetEURegionsByCountryIDResult
     * @return \ArbetsformedlingenWsTaxonomi\GetEURegionsByCountryIDResponse
     */
    public function setGetEURegionsByCountryIDResult($GetEURegionsByCountryIDResult)
    {
      $this->GetEURegionsByCountryIDResult = $GetEURegionsByCountryIDResult;
      return $this;
    }

}
