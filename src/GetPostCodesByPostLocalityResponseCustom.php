<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByPostLocalityResponseCustom
{

    /**
     * @var ArrayOfPostCode $GetPostCodesByPostLocalityResult
     */
    protected $GetPostCodesByPostLocalityResult = null;

    /**
     * @param ArrayOfPostCode $GetPostCodesByPostLocalityResult
     */
    public function __construct($GetPostCodesByPostLocalityResult)
    {
      $this->GetPostCodesByPostLocalityResult = $GetPostCodesByPostLocalityResult;
    }

    /**
     * @return ArrayOfPostCode
     */
    public function getGetPostCodesByPostLocalityResult()
    {
      return $this->GetPostCodesByPostLocalityResult;
    }

    /**
     * @param ArrayOfPostCode $GetPostCodesByPostLocalityResult
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostLocalityResponse
     */
    public function setGetPostCodesByPostLocalityResult($GetPostCodesByPostLocalityResult)
    {
      $this->GetPostCodesByPostLocalityResult = $GetPostCodesByPostLocalityResult;
      return $this;
    }

}
