<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleFieldsByLocaleFieldIdsResponseCustom
{

    /**
     * @var ArrayOfLocaleField $GetLocaleFieldsByLocaleFieldIdsResult
     */
    protected $GetLocaleFieldsByLocaleFieldIdsResult = null;

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByLocaleFieldIdsResult
     */
    public function __construct($GetLocaleFieldsByLocaleFieldIdsResult)
    {
      $this->GetLocaleFieldsByLocaleFieldIdsResult = $GetLocaleFieldsByLocaleFieldIdsResult;
    }

    /**
     * @return ArrayOfLocaleField
     */
    public function getGetLocaleFieldsByLocaleFieldIdsResult()
    {
      return $this->GetLocaleFieldsByLocaleFieldIdsResult;
    }

    /**
     * @param ArrayOfLocaleField $GetLocaleFieldsByLocaleFieldIdsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleFieldIdsResponse
     */
    public function setGetLocaleFieldsByLocaleFieldIdsResult($GetLocaleFieldsByLocaleFieldIdsResult)
    {
      $this->GetLocaleFieldsByLocaleFieldIdsResult = $GetLocaleFieldsByLocaleFieldIdsResult;
      return $this;
    }

}
