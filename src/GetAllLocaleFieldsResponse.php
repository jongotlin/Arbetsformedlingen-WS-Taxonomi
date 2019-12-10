<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLocaleFieldsResponse
{

    /**
     * @var ArrayOfLocaleField $GetAllLocaleFieldsResult
     */
    protected $GetAllLocaleFieldsResult = null;

    /**
     * @param ArrayOfLocaleField $GetAllLocaleFieldsResult
     */
    public function __construct($GetAllLocaleFieldsResult)
    {
      $this->GetAllLocaleFieldsResult = $GetAllLocaleFieldsResult;
    }

    /**
     * @return ArrayOfLocaleField
     */
    public function getGetAllLocaleFieldsResult()
    {
      return $this->GetAllLocaleFieldsResult;
    }

    /**
     * @param ArrayOfLocaleField $GetAllLocaleFieldsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLocaleFieldsResponse
     */
    public function setGetAllLocaleFieldsResult($GetAllLocaleFieldsResult)
    {
      $this->GetAllLocaleFieldsResult = $GetAllLocaleFieldsResult;
      return $this;
    }

}
