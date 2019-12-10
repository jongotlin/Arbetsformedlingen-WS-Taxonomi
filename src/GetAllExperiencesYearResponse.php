<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllExperiencesYearResponse
{

    /**
     * @var ArrayOfOccupationExperienceYear $GetAllExperiencesYearResult
     */
    protected $GetAllExperiencesYearResult = null;

    /**
     * @param ArrayOfOccupationExperienceYear $GetAllExperiencesYearResult
     */
    public function __construct($GetAllExperiencesYearResult)
    {
      $this->GetAllExperiencesYearResult = $GetAllExperiencesYearResult;
    }

    /**
     * @return ArrayOfOccupationExperienceYear
     */
    public function getGetAllExperiencesYearResult()
    {
      return $this->GetAllExperiencesYearResult;
    }

    /**
     * @param ArrayOfOccupationExperienceYear $GetAllExperiencesYearResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllExperiencesYearResponse
     */
    public function setGetAllExperiencesYearResult($GetAllExperiencesYearResult)
    {
      $this->GetAllExperiencesYearResult = $GetAllExperiencesYearResult;
      return $this;
    }

}
