<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllOccupationNameSynonymsResponseCustom
{

    /**
     * @var ArrayOfOccupationNameSynonym $GetAllOccupationNameSynonymsResult
     */
    protected $GetAllOccupationNameSynonymsResult = null;

    /**
     * @param ArrayOfOccupationNameSynonym $GetAllOccupationNameSynonymsResult
     */
    public function __construct($GetAllOccupationNameSynonymsResult)
    {
      $this->GetAllOccupationNameSynonymsResult = $GetAllOccupationNameSynonymsResult;
    }

    /**
     * @return ArrayOfOccupationNameSynonym
     */
    public function getGetAllOccupationNameSynonymsResult()
    {
      return $this->GetAllOccupationNameSynonymsResult;
    }

    /**
     * @param ArrayOfOccupationNameSynonym $GetAllOccupationNameSynonymsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllOccupationNameSynonymsResponse
     */
    public function setGetAllOccupationNameSynonymsResult($GetAllOccupationNameSynonymsResult)
    {
      $this->GetAllOccupationNameSynonymsResult = $GetAllOccupationNameSynonymsResult;
      return $this;
    }

}
