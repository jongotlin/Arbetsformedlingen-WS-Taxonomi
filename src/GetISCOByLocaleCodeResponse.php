<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetISCOByLocaleCodeResponse
{

    /**
     * @var ArrayOfString $GetISCOByLocaleCodeResult
     */
    protected $GetISCOByLocaleCodeResult = null;

    /**
     * @param ArrayOfString $GetISCOByLocaleCodeResult
     */
    public function __construct($GetISCOByLocaleCodeResult)
    {
      $this->GetISCOByLocaleCodeResult = $GetISCOByLocaleCodeResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetISCOByLocaleCodeResult()
    {
      return $this->GetISCOByLocaleCodeResult;
    }

    /**
     * @param ArrayOfString $GetISCOByLocaleCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetISCOByLocaleCodeResponse
     */
    public function setGetISCOByLocaleCodeResult($GetISCOByLocaleCodeResult)
    {
      $this->GetISCOByLocaleCodeResult = $GetISCOByLocaleCodeResult;
      return $this;
    }

}
