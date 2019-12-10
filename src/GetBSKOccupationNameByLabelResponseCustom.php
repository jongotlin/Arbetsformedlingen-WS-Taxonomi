<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetBSKOccupationNameByLabelResponseCustom
{

    /**
     * @var BSKOccupationName $GetBSKOccupationNameByLabelResult
     */
    protected $GetBSKOccupationNameByLabelResult = null;

    /**
     * @param BSKOccupationName $GetBSKOccupationNameByLabelResult
     */
    public function __construct($GetBSKOccupationNameByLabelResult)
    {
      $this->GetBSKOccupationNameByLabelResult = $GetBSKOccupationNameByLabelResult;
    }

    /**
     * @return BSKOccupationName
     */
    public function getGetBSKOccupationNameByLabelResult()
    {
      return $this->GetBSKOccupationNameByLabelResult;
    }

    /**
     * @param BSKOccupationName $GetBSKOccupationNameByLabelResult
     * @return \ArbetsformedlingenWsTaxonomi\GetBSKOccupationNameByLabelResponse
     */
    public function setGetBSKOccupationNameByLabelResult($GetBSKOccupationNameByLabelResult)
    {
      $this->GetBSKOccupationNameByLabelResult = $GetBSKOccupationNameByLabelResult;
      return $this;
    }

}
