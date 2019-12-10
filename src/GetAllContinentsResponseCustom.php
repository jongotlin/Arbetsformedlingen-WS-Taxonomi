<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllContinentsResponseCustom
{

    /**
     * @var ArrayOfContinent $GetAllContinentsResult
     */
    protected $GetAllContinentsResult = null;

    /**
     * @param ArrayOfContinent $GetAllContinentsResult
     */
    public function __construct($GetAllContinentsResult)
    {
      $this->GetAllContinentsResult = $GetAllContinentsResult;
    }

    /**
     * @return ArrayOfContinent
     */
    public function getGetAllContinentsResult()
    {
      return $this->GetAllContinentsResult;
    }

    /**
     * @param ArrayOfContinent $GetAllContinentsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllContinentsResponse
     */
    public function setGetAllContinentsResult($GetAllContinentsResult)
    {
      $this->GetAllContinentsResult = $GetAllContinentsResult;
      return $this;
    }

}
