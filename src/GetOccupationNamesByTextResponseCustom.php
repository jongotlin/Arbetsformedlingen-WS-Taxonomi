<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesByTextResponseCustom
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesByTextResult
     */
    protected $GetOccupationNamesByTextResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByTextResult
     */
    public function __construct($GetOccupationNamesByTextResult)
    {
      $this->GetOccupationNamesByTextResult = $GetOccupationNamesByTextResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesByTextResult()
    {
      return $this->GetOccupationNamesByTextResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByTextResponse
     */
    public function setGetOccupationNamesByTextResult($GetOccupationNamesByTextResult)
    {
      $this->GetOccupationNamesByTextResult = $GetOccupationNamesByTextResult;
      return $this;
    }

}
