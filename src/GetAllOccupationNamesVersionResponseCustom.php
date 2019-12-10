<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllOccupationNamesVersionResponseCustom
{

    /**
     * @var ArrayOfOccupationNameExt $GetAllOccupationNamesVersionResult
     */
    protected $GetAllOccupationNamesVersionResult = null;

    /**
     * @param ArrayOfOccupationNameExt $GetAllOccupationNamesVersionResult
     */
    public function __construct($GetAllOccupationNamesVersionResult)
    {
      $this->GetAllOccupationNamesVersionResult = $GetAllOccupationNamesVersionResult;
    }

    /**
     * @return ArrayOfOccupationNameExt
     */
    public function getGetAllOccupationNamesVersionResult()
    {
      return $this->GetAllOccupationNamesVersionResult;
    }

    /**
     * @param ArrayOfOccupationNameExt $GetAllOccupationNamesVersionResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllOccupationNamesVersionResponse
     */
    public function setGetAllOccupationNamesVersionResult($GetAllOccupationNamesVersionResult)
    {
      $this->GetAllOccupationNamesVersionResult = $GetAllOccupationNamesVersionResult;
      return $this;
    }

}
