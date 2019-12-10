<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllEducationLevelsResponseCustom
{

    /**
     * @var ArrayOfEducationLevel $GetAllEducationLevelsResult
     */
    protected $GetAllEducationLevelsResult = null;

    /**
     * @param ArrayOfEducationLevel $GetAllEducationLevelsResult
     */
    public function __construct($GetAllEducationLevelsResult)
    {
      $this->GetAllEducationLevelsResult = $GetAllEducationLevelsResult;
    }

    /**
     * @return ArrayOfEducationLevel
     */
    public function getGetAllEducationLevelsResult()
    {
      return $this->GetAllEducationLevelsResult;
    }

    /**
     * @param ArrayOfEducationLevel $GetAllEducationLevelsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllEducationLevelsResponse
     */
    public function setGetAllEducationLevelsResult($GetAllEducationLevelsResult)
    {
      $this->GetAllEducationLevelsResult = $GetAllEducationLevelsResult;
      return $this;
    }

}
