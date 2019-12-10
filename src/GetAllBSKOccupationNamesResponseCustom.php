<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllBSKOccupationNamesResponseCustom
{

    /**
     * @var ArrayOfBSKOccupationName $GetAllBSKOccupationNamesResult
     */
    protected $GetAllBSKOccupationNamesResult = null;

    /**
     * @param ArrayOfBSKOccupationName $GetAllBSKOccupationNamesResult
     */
    public function __construct($GetAllBSKOccupationNamesResult)
    {
      $this->GetAllBSKOccupationNamesResult = $GetAllBSKOccupationNamesResult;
    }

    /**
     * @return ArrayOfBSKOccupationName
     */
    public function getGetAllBSKOccupationNamesResult()
    {
      return $this->GetAllBSKOccupationNamesResult;
    }

    /**
     * @param ArrayOfBSKOccupationName $GetAllBSKOccupationNamesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllBSKOccupationNamesResponse
     */
    public function setGetAllBSKOccupationNamesResult($GetAllBSKOccupationNamesResult)
    {
      $this->GetAllBSKOccupationNamesResult = $GetAllBSKOccupationNamesResult;
      return $this;
    }

}
