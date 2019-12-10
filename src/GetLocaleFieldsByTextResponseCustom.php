<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleFieldsByTextResponseCustom
{

    /**
     * @var ArrayOfLocaleField $GetLocaleFieldsByTextResult
     */
    protected $GetLocaleFieldsByTextResult = null;

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByTextResult
     */
    public function __construct($GetLocaleFieldsByTextResult)
    {
      $this->GetLocaleFieldsByTextResult = $GetLocaleFieldsByTextResult;
    }

    /**
     * @return ArrayOfLocaleField
     */
    public function getGetLocaleFieldsByTextResult()
    {
      return $this->GetLocaleFieldsByTextResult;
    }

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByTextResponse
     */
    public function setGetLocaleFieldsByTextResult($GetLocaleFieldsByTextResult)
    {
      $this->GetLocaleFieldsByTextResult = $GetLocaleFieldsByTextResult;
      return $this;
    }

}
