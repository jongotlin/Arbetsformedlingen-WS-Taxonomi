<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesArtResponse
{

    /**
     * @var ArrayOfOccupationName $GetOccupationNamesArtResult
     */
    protected $GetOccupationNamesArtResult = null;

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesArtResult
     */
    public function __construct($GetOccupationNamesArtResult)
    {
      $this->GetOccupationNamesArtResult = $GetOccupationNamesArtResult;
    }

    /**
     * @return ArrayOfOccupationName
     */
    public function getGetOccupationNamesArtResult()
    {
      return $this->GetOccupationNamesArtResult;
    }

    /**
     * @param ArrayOfOccupationName $GetOccupationNamesArtResult
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesArtResponse
     */
    public function setGetOccupationNamesArtResult($GetOccupationNamesArtResult)
    {
      $this->GetOccupationNamesArtResult = $GetOccupationNamesArtResult;
      return $this;
    }

}
