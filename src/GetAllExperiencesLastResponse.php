<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllExperiencesLastResponse
{

    /**
     * @var ArrayOfOccupationExperienceLast $GetAllExperiencesLastResult
     */
    protected $GetAllExperiencesLastResult = null;

    /**
     * @param ArrayOfOccupationExperienceLast $GetAllExperiencesLastResult
     */
    public function __construct($GetAllExperiencesLastResult)
    {
      $this->GetAllExperiencesLastResult = $GetAllExperiencesLastResult;
    }

    /**
     * @return ArrayOfOccupationExperienceLast
     */
    public function getGetAllExperiencesLastResult()
    {
      return $this->GetAllExperiencesLastResult;
    }

    /**
     * @param ArrayOfOccupationExperienceLast $GetAllExperiencesLastResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllExperiencesLastResponse
     */
    public function setGetAllExperiencesLastResult($GetAllExperiencesLastResult)
    {
      $this->GetAllExperiencesLastResult = $GetAllExperiencesLastResult;
      return $this;
    }

}
