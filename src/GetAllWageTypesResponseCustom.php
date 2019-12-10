<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllWageTypesResponseCustom
{

    /**
     * @var ArrayOfWageType $GetAllWageTypesResult
     */
    protected $GetAllWageTypesResult = null;

    /**
     * @param ArrayOfWageType $GetAllWageTypesResult
     */
    public function __construct($GetAllWageTypesResult)
    {
      $this->GetAllWageTypesResult = $GetAllWageTypesResult;
    }

    /**
     * @return ArrayOfWageType
     */
    public function getGetAllWageTypesResult()
    {
      return $this->GetAllWageTypesResult;
    }

    /**
     * @param ArrayOfWageType $GetAllWageTypesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllWageTypesResponse
     */
    public function setGetAllWageTypesResult($GetAllWageTypesResult)
    {
      $this->GetAllWageTypesResult = $GetAllWageTypesResult;
      return $this;
    }

}
