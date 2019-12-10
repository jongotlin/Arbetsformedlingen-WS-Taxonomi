<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupsByLocaleCodesResponse
{

    /**
     * @var ArrayOfLocaleGroup $GetLocaleGroupsByLocaleCodesResult
     */
    protected $GetLocaleGroupsByLocaleCodesResult = null;

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByLocaleCodesResult
     */
    public function __construct($GetLocaleGroupsByLocaleCodesResult)
    {
      $this->GetLocaleGroupsByLocaleCodesResult = $GetLocaleGroupsByLocaleCodesResult;
    }

    /**
     * @return ArrayOfLocaleGroup
     */
    public function getGetLocaleGroupsByLocaleCodesResult()
    {
      return $this->GetLocaleGroupsByLocaleCodesResult;
    }

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByLocaleCodesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleCodesResponse
     */
    public function setGetLocaleGroupsByLocaleCodesResult($GetLocaleGroupsByLocaleCodesResult)
    {
      $this->GetLocaleGroupsByLocaleCodesResult = $GetLocaleGroupsByLocaleCodesResult;
      return $this;
    }

}
