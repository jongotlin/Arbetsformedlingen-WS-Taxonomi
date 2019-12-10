<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesByOccupationNameIdsVersionResponse
{

    /**
     * @var ArrayOfOccupationNameExt $GetOccupationNamesByOccupationNameIdsVersionResult
     */
    protected $GetOccupationNamesByOccupationNameIdsVersionResult = null;

    /**
     * @param ArrayOfOccupationNameExt $GetOccupationNamesByOccupationNameIdsVersionResult
     */
    public function __construct($GetOccupationNamesByOccupationNameIdsVersionResult)
    {
      $this->GetOccupationNamesByOccupationNameIdsVersionResult = $GetOccupationNamesByOccupationNameIdsVersionResult;
    }

    /**
     * @return ArrayOfOccupationNameExt
     */
    public function getGetOccupationNamesByOccupationNameIdsVersionResult()
    {
      return $this->GetOccupationNamesByOccupationNameIdsVersionResult;
    }

    /**
     * @param ArrayOfOccupationNameExt $GetOccupationNamesByOccupationNameIdsVersionResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByOccupationNameIdsVersionResponse
     */
    public function setGetOccupationNamesByOccupationNameIdsVersionResult($GetOccupationNamesByOccupationNameIdsVersionResult)
    {
      $this->GetOccupationNamesByOccupationNameIdsVersionResult = $GetOccupationNamesByOccupationNameIdsVersionResult;
      return $this;
    }

}
