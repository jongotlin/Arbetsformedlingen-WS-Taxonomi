<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllOccupationNamesResponseCustom
{

    /**
     * @var ArrayOfOccupationName $GetAllOccupationNamesResult
     */
    protected $GetAllOccupationNamesResult = null;

    /**
     * @param ArrayOfOccupationName $GetAllOccupationNamesResult
     */
    public function __construct($GetAllOccupationNamesResult)
    {
      $this->GetAllOccupationNamesResult = $GetAllOccupationNamesResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetAllOccupationNamesResult()
    {
      return $this->GetAllOccupationNamesResult;
    }

    /**
     * @param ArrayOfOccupationName $GetAllOccupationNamesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllOccupationNamesResponse
     */
    public function setGetAllOccupationNamesResult($GetAllOccupationNamesResult)
    {
      $this->GetAllOccupationNamesResult = $GetAllOccupationNamesResult;
      return $this;
    }

}
