<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllEmploymentTypesResponse
{

    /**
     * @var ArrayOfEmploymentType $GetAllEmploymentTypesResult
     */
    protected $GetAllEmploymentTypesResult = null;

    /**
     * @param ArrayOfEmploymentType $GetAllEmploymentTypesResult
     */
    public function __construct($GetAllEmploymentTypesResult)
    {
      $this->GetAllEmploymentTypesResult = $GetAllEmploymentTypesResult;
    }

    /**
     * @return ArrayOfEmploymentType
     */
    public function getGetAllEmploymentTypesResult()
    {
      return $this->GetAllEmploymentTypesResult;
    }

    /**
     * @param ArrayOfEmploymentType $GetAllEmploymentTypesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllEmploymentTypesResponse
     */
    public function setGetAllEmploymentTypesResult($GetAllEmploymentTypesResult)
    {
      $this->GetAllEmploymentTypesResult = $GetAllEmploymentTypesResult;
      return $this;
    }

}
