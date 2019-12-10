<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLanguagesWithISOResponse
{

    /**
     * @var ArrayOfLanguageISO $GetAllLanguagesWithISOResult
     */
    protected $GetAllLanguagesWithISOResult = null;

    /**
     * @param ArrayOfLanguageISO $GetAllLanguagesWithISOResult
     */
    public function __construct($GetAllLanguagesWithISOResult)
    {
      $this->GetAllLanguagesWithISOResult = $GetAllLanguagesWithISOResult;
    }

    /**
     * @return ArrayOfLanguageISO
     */
    public function getGetAllLanguagesWithISOResult()
    {
      return $this->GetAllLanguagesWithISOResult;
    }

    /**
     * @param ArrayOfLanguageISO $GetAllLanguagesWithISOResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLanguagesWithISOResponse
     */
    public function setGetAllLanguagesWithISOResult($GetAllLanguagesWithISOResult)
    {
      $this->GetAllLanguagesWithISOResult = $GetAllLanguagesWithISOResult;
      return $this;
    }

}
