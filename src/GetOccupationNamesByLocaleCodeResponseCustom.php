<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesByLocaleCodeResponseCustom
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesByLocaleCodeResult
     */
    protected $GetOccupationNamesByLocaleCodeResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByLocaleCodeResult
     */
    public function __construct($GetOccupationNamesByLocaleCodeResult)
    {
      $this->GetOccupationNamesByLocaleCodeResult = $GetOccupationNamesByLocaleCodeResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesByLocaleCodeResult()
    {
      return $this->GetOccupationNamesByLocaleCodeResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesByLocaleCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByLocaleCodeResponse
     */
    public function setGetOccupationNamesByLocaleCodeResult($GetOccupationNamesByLocaleCodeResult)
    {
      $this->GetOccupationNamesByLocaleCodeResult = $GetOccupationNamesByLocaleCodeResult;
      return $this;
    }

}
