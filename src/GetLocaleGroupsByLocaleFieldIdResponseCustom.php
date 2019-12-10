<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupsByLocaleFieldIdResponseCustom
{

    /**
     * @var ArrayOfLocaleGroup $GetLocaleGroupsByLocaleFieldIdResult
     */
    protected $GetLocaleGroupsByLocaleFieldIdResult = null;

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByLocaleFieldIdResult
     */
    public function __construct($GetLocaleGroupsByLocaleFieldIdResult)
    {
      $this->GetLocaleGroupsByLocaleFieldIdResult = $GetLocaleGroupsByLocaleFieldIdResult;
    }

    /**
     * @return ArrayOfLocaleGroup
     */
    public function getGetLocaleGroupsByLocaleFieldIdResult()
    {
      return $this->GetLocaleGroupsByLocaleFieldIdResult;
    }

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByLocaleFieldIdResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleFieldIdResponse
     */
    public function setGetLocaleGroupsByLocaleFieldIdResult($GetLocaleGroupsByLocaleFieldIdResult)
    {
      $this->GetLocaleGroupsByLocaleFieldIdResult = $GetLocaleGroupsByLocaleFieldIdResult;
      return $this;
    }

}
