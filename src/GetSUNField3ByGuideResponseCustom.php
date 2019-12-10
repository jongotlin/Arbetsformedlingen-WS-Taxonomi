<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSUNField3ByGuideResponseCustom
{

    /**
     * @var ArrayOfSUNField3 $GetSUNField3ByGuideResult
     */
    protected $GetSUNField3ByGuideResult = null;

    /**
     * @param ArrayOfSUNField3 $GetSUNField3ByGuideResult
     */
    public function __construct($GetSUNField3ByGuideResult)
    {
      $this->GetSUNField3ByGuideResult = $GetSUNField3ByGuideResult;
    }

    /**
     * @return ArrayOfSUNField3
     */
    public function getGetSUNField3ByGuideResult()
    {
      return $this->GetSUNField3ByGuideResult;
    }

    /**
     * @param ArrayOfSUNField3 $GetSUNField3ByGuideResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSUNField3ByGuideResponse
     */
    public function setGetSUNField3ByGuideResult($GetSUNField3ByGuideResult)
    {
      $this->GetSUNField3ByGuideResult = $GetSUNField3ByGuideResult;
      return $this;
    }

}
