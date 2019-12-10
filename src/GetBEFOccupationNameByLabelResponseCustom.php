<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetBEFOccupationNameByLabelResponseCustom
{

    /**
     * @var BEFOccupationName $GetBEFOccupationNameByLabelResult
     */
    protected $GetBEFOccupationNameByLabelResult = null;

    /**
     * @param BEFOccupationName $GetBEFOccupationNameByLabelResult
     */
    public function __construct($GetBEFOccupationNameByLabelResult)
    {
      $this->GetBEFOccupationNameByLabelResult = $GetBEFOccupationNameByLabelResult;
    }

    /**
     * @return BEFOccupationName
     */
    public function getGetBEFOccupationNameByLabelResult()
    {
      return $this->GetBEFOccupationNameByLabelResult;
    }

    /**
     * @param BEFOccupationName $GetBEFOccupationNameByLabelResult
     * @return \ArbetsformedlingenWsTaxonomi\GetBEFOccupationNameByLabelResponse
     */
    public function setGetBEFOccupationNameByLabelResult($GetBEFOccupationNameByLabelResult)
    {
      $this->GetBEFOccupationNameByLabelResult = $GetBEFOccupationNameByLabelResult;
      return $this;
    }

}
