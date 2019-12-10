<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLanguagesResponse
{

    /**
     * @var ArrayOfLanguage $GetAllLanguagesResult
     */
    protected $GetAllLanguagesResult = null;

    /**
     * @param ArrayOfLanguage $GetAllLanguagesResult
     */
    public function __construct($GetAllLanguagesResult)
    {
      $this->GetAllLanguagesResult = $GetAllLanguagesResult;
    }

    /**
     * @return ArrayOfLanguage
     */
    public function getGetAllLanguagesResult()
    {
      return $this->GetAllLanguagesResult;
    }

    /**
     * @param ArrayOfLanguage $GetAllLanguagesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLanguagesResponse
     */
    public function setGetAllLanguagesResult($GetAllLanguagesResult)
    {
      $this->GetAllLanguagesResult = $GetAllLanguagesResult;
      return $this;
    }

}
