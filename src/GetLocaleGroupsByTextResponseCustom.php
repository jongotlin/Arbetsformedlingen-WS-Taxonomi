<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupsByTextResponseCustom
{

    /**
     * @var ArrayOfLocaleGroup $GetLocaleGroupsByTextResult
     */
    protected $GetLocaleGroupsByTextResult = null;

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByTextResult
     */
    public function __construct($GetLocaleGroupsByTextResult)
    {
      $this->GetLocaleGroupsByTextResult = $GetLocaleGroupsByTextResult;
    }

    /**
     * @return ArrayOfLocaleGroup
     */
    public function getGetLocaleGroupsByTextResult()
    {
      return $this->GetLocaleGroupsByTextResult;
    }

    /**
     * @param ArrayOfLocaleGroup $GetLocaleGroupsByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByTextResponse
     */
    public function setGetLocaleGroupsByTextResult($GetLocaleGroupsByTextResult)
    {
      $this->GetLocaleGroupsByTextResult = $GetLocaleGroupsByTextResult;
      return $this;
    }

}
