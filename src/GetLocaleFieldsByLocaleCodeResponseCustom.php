<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleFieldsByLocaleCodeResponseCustom
{

    /**
     * @var ArrayOfLocaleField $GetLocaleFieldsByLocaleCodeResult
     */
    protected $GetLocaleFieldsByLocaleCodeResult = null;

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByLocaleCodeResult
     */
    public function __construct($GetLocaleFieldsByLocaleCodeResult)
    {
      $this->GetLocaleFieldsByLocaleCodeResult = $GetLocaleFieldsByLocaleCodeResult;
    }

    /**
     * @return ArrayOfLocaleField
     */
    public function getGetLocaleFieldsByLocaleCodeResult()
    {
      return $this->GetLocaleFieldsByLocaleCodeResult;
    }

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByLocaleCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleCodeResponse
     */
    public function setGetLocaleFieldsByLocaleCodeResult($GetLocaleFieldsByLocaleCodeResult)
    {
      $this->GetLocaleFieldsByLocaleCodeResult = $GetLocaleFieldsByLocaleCodeResult;
      return $this;
    }

}
