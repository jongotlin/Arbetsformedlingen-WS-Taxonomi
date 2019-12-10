<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAIDOccupationNameByLabelResponseCustom
{

    /**
     * @var AIDOccupationName $GetAIDOccupationNameByLabelResult
     */
    protected $GetAIDOccupationNameByLabelResult = null;

    /**
     * @param AIDOccupationName $GetAIDOccupationNameByLabelResult
     */
    public function __construct($GetAIDOccupationNameByLabelResult)
    {
      $this->GetAIDOccupationNameByLabelResult = $GetAIDOccupationNameByLabelResult;
    }

    /**
     * @return AIDOccupationName
     */
    public function getGetAIDOccupationNameByLabelResult()
    {
      return $this->GetAIDOccupationNameByLabelResult;
    }

    /**
     * @param AIDOccupationName $GetAIDOccupationNameByLabelResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAIDOccupationNameByLabelResponse
     */
    public function setGetAIDOccupationNameByLabelResult($GetAIDOccupationNameByLabelResult)
    {
      $this->GetAIDOccupationNameByLabelResult = $GetAIDOccupationNameByLabelResult;
      return $this;
    }

}
