<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLanguageLevelsResponseCustom
{

    /**
     * @var ArrayOfLanguageLevel $GetAllLanguageLevelsResult
     */
    protected $GetAllLanguageLevelsResult = null;

    /**
     * @param ArrayOfLanguageLevel $GetAllLanguageLevelsResult
     */
    public function __construct($GetAllLanguageLevelsResult)
    {
      $this->GetAllLanguageLevelsResult = $GetAllLanguageLevelsResult;
    }

    /**
     * @return ArrayOfLanguageLevel
     */
    public function getGetAllLanguageLevelsResult()
    {
      return $this->GetAllLanguageLevelsResult;
    }

    /**
     * @param ArrayOfLanguageLevel $GetAllLanguageLevelsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLanguageLevelsResponse
     */
    public function setGetAllLanguageLevelsResult($GetAllLanguageLevelsResult)
    {
      $this->GetAllLanguageLevelsResult = $GetAllLanguageLevelsResult;
      return $this;
    }

}
