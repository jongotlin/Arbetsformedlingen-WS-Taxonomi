<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllJobSituationsResponse
{

    /**
     * @var ArrayOfJobSituation $GetAllJobSituationsResult
     */
    protected $GetAllJobSituationsResult = null;

    /**
     * @param ArrayOfJobSituation $GetAllJobSituationsResult
     */
    public function __construct($GetAllJobSituationsResult)
    {
      $this->GetAllJobSituationsResult = $GetAllJobSituationsResult;
    }

    /**
     * @return ArrayOfJobSituation
     */
    public function getGetAllJobSituationsResult()
    {
      return $this->GetAllJobSituationsResult;
    }

    /**
     * @param ArrayOfJobSituation $GetAllJobSituationsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllJobSituationsResponse
     */
    public function setGetAllJobSituationsResult($GetAllJobSituationsResult)
    {
      $this->GetAllJobSituationsResult = $GetAllJobSituationsResult;
      return $this;
    }

}
