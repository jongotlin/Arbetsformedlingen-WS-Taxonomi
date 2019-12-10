<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllAIDOccupationNamesResponseCustom
{

    /**
     * @var ArrayOfAIDOccupationName $GetAllAIDOccupationNamesResult
     */
    protected $GetAllAIDOccupationNamesResult = null;

    /**
     * @param ArrayOfAIDOccupationName $GetAllAIDOccupationNamesResult
     */
    public function __construct($GetAllAIDOccupationNamesResult)
    {
      $this->GetAllAIDOccupationNamesResult = $GetAllAIDOccupationNamesResult;
    }

    /**
     * @return ArrayOfAIDOccupationName
     */
    public function getGetAllAIDOccupationNamesResult()
    {
      return $this->GetAllAIDOccupationNamesResult;
    }

    /**
     * @param ArrayOfAIDOccupationName $GetAllAIDOccupationNamesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllAIDOccupationNamesResponse
     */
    public function setGetAllAIDOccupationNamesResult($GetAllAIDOccupationNamesResult)
    {
      $this->GetAllAIDOccupationNamesResult = $GetAllAIDOccupationNamesResult;
      return $this;
    }

}
