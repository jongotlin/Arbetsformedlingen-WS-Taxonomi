<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesByOccupationNameIdsResponseCustom
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesByOccupationNameIdsResult
     */
    protected $GetOccupationNamesByOccupationNameIdsResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByOccupationNameIdsResult
     */
    public function __construct($GetOccupationNamesByOccupationNameIdsResult)
    {
      $this->GetOccupationNamesByOccupationNameIdsResult = $GetOccupationNamesByOccupationNameIdsResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesByOccupationNameIdsResult()
    {
      return $this->GetOccupationNamesByOccupationNameIdsResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByOccupationNameIdsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByOccupationNameIdsResponse
     */
    public function setGetOccupationNamesByOccupationNameIdsResult($GetOccupationNamesByOccupationNameIdsResult)
    {
      $this->GetOccupationNamesByOccupationNameIdsResult = $GetOccupationNamesByOccupationNameIdsResult;
      return $this;
    }

}
