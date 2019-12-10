<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleCodeByISCOResponse
{

    /**
     * @var ArrayOfString $GetLocaleCodeByISCOResult
     */
    protected $GetLocaleCodeByISCOResult = null;

    /**
     * @param ArrayOfString $GetLocaleCodeByISCOResult
     */
    public function __construct($GetLocaleCodeByISCOResult)
    {
      $this->GetLocaleCodeByISCOResult = $GetLocaleCodeByISCOResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetLocaleCodeByISCOResult()
    {
      return $this->GetLocaleCodeByISCOResult;
    }

    /**
     * @param ArrayOfString $GetLocaleCodeByISCOResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleCodeByISCOResponse
     */
    public function setGetLocaleCodeByISCOResult($GetLocaleCodeByISCOResult)
    {
      $this->GetLocaleCodeByISCOResult = $GetLocaleCodeByISCOResult;
      return $this;
    }

}
