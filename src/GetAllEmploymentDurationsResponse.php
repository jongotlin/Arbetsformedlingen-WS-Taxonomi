<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllEmploymentDurationsResponse
{

    /**
     * @var ArrayOfEmploymentDuration $GetAllEmploymentDurationsResult
     */
    protected $GetAllEmploymentDurationsResult = null;

    /**
     * @param ArrayOfEmploymentDuration $GetAllEmploymentDurationsResult
     */
    public function __construct($GetAllEmploymentDurationsResult)
    {
      $this->GetAllEmploymentDurationsResult = $GetAllEmploymentDurationsResult;
    }

    /**
     * @return ArrayOfEmploymentDuration
     */
    public function getGetAllEmploymentDurationsResult()
    {
      return $this->GetAllEmploymentDurationsResult;
    }

    /**
     * @param ArrayOfEmploymentDuration $GetAllEmploymentDurationsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllEmploymentDurationsResponse
     */
    public function setGetAllEmploymentDurationsResult($GetAllEmploymentDurationsResult)
    {
      $this->GetAllEmploymentDurationsResult = $GetAllEmploymentDurationsResult;
      return $this;
    }

}
