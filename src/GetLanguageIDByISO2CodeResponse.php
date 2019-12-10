<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLanguageIDByISO2CodeResponse
{

    /**
     * @var int $GetLanguageIDByISO2CodeResult
     */
    protected $GetLanguageIDByISO2CodeResult = null;

    /**
     * @param int $GetLanguageIDByISO2CodeResult
     */
    public function __construct($GetLanguageIDByISO2CodeResult)
    {
      $this->GetLanguageIDByISO2CodeResult = $GetLanguageIDByISO2CodeResult;
    }

    /**
     * @return int
     */
    public function getGetLanguageIDByISO2CodeResult()
    {
      return $this->GetLanguageIDByISO2CodeResult;
    }

    /**
     * @param int $GetLanguageIDByISO2CodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLanguageIDByISO2CodeResponse
     */
    public function setGetLanguageIDByISO2CodeResult($GetLanguageIDByISO2CodeResult)
    {
      $this->GetLanguageIDByISO2CodeResult = $GetLanguageIDByISO2CodeResult;
      return $this;
    }

}
