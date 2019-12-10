<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetVersionInformationsResponse
{

    /**
     * @var ArrayOfVersionInformation $GetVersionInformationsResult
     */
    protected $GetVersionInformationsResult = null;

    /**
     * @param ArrayOfVersionInformation $GetVersionInformationsResult
     */
    public function __construct($GetVersionInformationsResult)
    {
      $this->GetVersionInformationsResult = $GetVersionInformationsResult;
    }

    /**
     * @return ArrayOfVersionInformation
     */
    public function getGetVersionInformationsResult()
    {
      return $this->GetVersionInformationsResult;
    }

    /**
     * @param ArrayOfVersionInformation $GetVersionInformationsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetVersionInformationsResponse
     */
    public function setGetVersionInformationsResult($GetVersionInformationsResult)
    {
      $this->GetVersionInformationsResult = $GetVersionInformationsResult;
      return $this;
    }

}
