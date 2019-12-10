<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllAFOfficesResponse
{

    /**
     * @var ArrayOfAFOffice $GetAllAFOfficesResult
     */
    protected $GetAllAFOfficesResult = null;

    /**
     * @param ArrayOfAFOffice $GetAllAFOfficesResult
     */
    public function __construct($GetAllAFOfficesResult)
    {
      $this->GetAllAFOfficesResult = $GetAllAFOfficesResult;
    }

    /**
     * @return ArrayOfAFOffice
     */
    public function getGetAllAFOfficesResult()
    {
      return $this->GetAllAFOfficesResult;
    }

    /**
     * @param ArrayOfAFOffice $GetAllAFOfficesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllAFOfficesResponse
     */
    public function setGetAllAFOfficesResult($GetAllAFOfficesResult)
    {
      $this->GetAllAFOfficesResult = $GetAllAFOfficesResult;
      return $this;
    }

}
