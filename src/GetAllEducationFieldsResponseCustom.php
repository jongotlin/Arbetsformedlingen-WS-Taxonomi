<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllEducationFieldsResponseCustom
{

    /**
     * @var ArrayOfEducationField $GetAllEducationFieldsResult
     */
    protected $GetAllEducationFieldsResult = null;

    /**
     * @param ArrayOfEducationField $GetAllEducationFieldsResult
     */
    public function __construct($GetAllEducationFieldsResult)
    {
      $this->GetAllEducationFieldsResult = $GetAllEducationFieldsResult;
    }

    /**
     * @return ArrayOfEducationField
     */
    public function getGetAllEducationFieldsResult()
    {
      return $this->GetAllEducationFieldsResult;
    }

    /**
     * @param ArrayOfEducationField $GetAllEducationFieldsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllEducationFieldsResponse
     */
    public function setGetAllEducationFieldsResult($GetAllEducationFieldsResult)
    {
      $this->GetAllEducationFieldsResult = $GetAllEducationFieldsResult;
      return $this;
    }

}
