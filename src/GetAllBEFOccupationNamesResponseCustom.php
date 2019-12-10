<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllBEFOccupationNamesResponseCustom
{

    /**
     * @var ArrayOfBEFOccupationName $GetAllBEFOccupationNamesResult
     */
    protected $GetAllBEFOccupationNamesResult = null;

    /**
     * @param ArrayOfBEFOccupationName $GetAllBEFOccupationNamesResult
     */
    public function __construct($GetAllBEFOccupationNamesResult)
    {
      $this->GetAllBEFOccupationNamesResult = $GetAllBEFOccupationNamesResult;
    }

    /**
     * @return ArrayOfBEFOccupationName
     */
    public function getGetAllBEFOccupationNamesResult()
    {
      return $this->GetAllBEFOccupationNamesResult;
    }

    /**
     * @param ArrayOfBEFOccupationName $GetAllBEFOccupationNamesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllBEFOccupationNamesResponse
     */
    public function setGetAllBEFOccupationNamesResult($GetAllBEFOccupationNamesResult)
    {
      $this->GetAllBEFOccupationNamesResult = $GetAllBEFOccupationNamesResult;
      return $this;
    }

}
