<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesNavigationResponseCustom
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesNavigationResult
     */
    protected $GetOccupationNamesNavigationResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesNavigationResult
     */
    public function __construct($GetOccupationNamesNavigationResult)
    {
      $this->GetOccupationNamesNavigationResult = $GetOccupationNamesNavigationResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesNavigationResult()
    {
      return $this->GetOccupationNamesNavigationResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesNavigationResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesNavigationResponse
     */
    public function setGetOccupationNamesNavigationResult($GetOccupationNamesNavigationResult)
    {
      $this->GetOccupationNamesNavigationResult = $GetOccupationNamesNavigationResult;
      return $this;
    }

}
