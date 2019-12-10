<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesConstructionResponse
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesConstructionResult
     */
    protected $GetOccupationNamesConstructionResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesConstructionResult
     */
    public function __construct($GetOccupationNamesConstructionResult)
    {
      $this->GetOccupationNamesConstructionResult = $GetOccupationNamesConstructionResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesConstructionResult()
    {
      return $this->GetOccupationNamesConstructionResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesConstructionResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesConstructionResponse
     */
    public function setGetOccupationNamesConstructionResult($GetOccupationNamesConstructionResult)
    {
      $this->GetOccupationNamesConstructionResult = $GetOccupationNamesConstructionResult;
      return $this;
    }

}
