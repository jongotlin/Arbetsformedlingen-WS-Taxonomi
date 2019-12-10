<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllEURegionsResponse
{

    /**
     * @var ArrayOfEURegion $GetAllEURegionsResult
     */
    protected $GetAllEURegionsResult = null;

    /**
     * @param ArrayOfEURegion $GetAllEURegionsResult
     */
    public function __construct($GetAllEURegionsResult)
    {
      $this->GetAllEURegionsResult = $GetAllEURegionsResult;
    }

    /**
     * @return ArrayOfEURegion
     */
    public function getGetAllEURegionsResult()
    {
      return $this->GetAllEURegionsResult;
    }

    /**
     * @param ArrayOfEURegion $GetAllEURegionsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllEURegionsResponse
     */
    public function setGetAllEURegionsResult($GetAllEURegionsResult)
    {
      $this->GetAllEURegionsResult = $GetAllEURegionsResult;
      return $this;
    }

}
