<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllPostCodesResponse
{

    /**
     * @var ArrayOfPostCode $GetAllPostCodesResult
     */
    protected $GetAllPostCodesResult = null;

    /**
     * @param ArrayOfPostCode $GetAllPostCodesResult
     */
    public function __construct($GetAllPostCodesResult)
    {
      $this->GetAllPostCodesResult = $GetAllPostCodesResult;
    }

    /**
     * @return ArrayOfPostCode
     */
    public function getGetAllPostCodesResult()
    {
      return $this->GetAllPostCodesResult;
    }

    /**
     * @param ArrayOfPostCode $GetAllPostCodesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllPostCodesResponse
     */
    public function setGetAllPostCodesResult($GetAllPostCodesResult)
    {
      $this->GetAllPostCodesResult = $GetAllPostCodesResult;
      return $this;
    }

}
