<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllInternalJobSituationsResponseCustom
{

    /**
     * @var ArrayOfJobSituation $GetAllInternalJobSituationsResult
     */
    protected $GetAllInternalJobSituationsResult = null;

    /**
     * @param ArrayOfJobSituation $GetAllInternalJobSituationsResult
     */
    public function __construct($GetAllInternalJobSituationsResult)
    {
      $this->GetAllInternalJobSituationsResult = $GetAllInternalJobSituationsResult;
    }

    /**
     * @return ArrayOfJobSituation
     */
    public function getGetAllInternalJobSituationsResult()
    {
      return $this->GetAllInternalJobSituationsResult;
    }

    /**
     * @param ArrayOfJobSituation $GetAllInternalJobSituationsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllInternalJobSituationsResponse
     */
    public function setGetAllInternalJobSituationsResult($GetAllInternalJobSituationsResult)
    {
      $this->GetAllInternalJobSituationsResult = $GetAllInternalJobSituationsResult;
      return $this;
    }

}
