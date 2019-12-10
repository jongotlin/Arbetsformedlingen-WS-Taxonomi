<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByPostCodeResponse
{

    /**
     * @var ArrayOfPostCode $GetPostCodesByPostCodeResult
     */
    protected $GetPostCodesByPostCodeResult = null;

    /**
     * @param ArrayOfPostCode $GetPostCodesByPostCodeResult
     */
    public function __construct($GetPostCodesByPostCodeResult)
    {
      $this->GetPostCodesByPostCodeResult = $GetPostCodesByPostCodeResult;
    }

    /**
     * @return ArrayOfPostCode
     */
    public function getGetPostCodesByPostCodeResult()
    {
      return $this->GetPostCodesByPostCodeResult;
    }

    /**
     * @param ArrayOfPostCode $GetPostCodesByPostCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostCodeResponse
     */
    public function setGetPostCodesByPostCodeResult($GetPostCodesByPostCodeResult)
    {
      $this->GetPostCodesByPostCodeResult = $GetPostCodesByPostCodeResult;
      return $this;
    }

}
