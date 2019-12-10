<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllMunicipalityHomePagesResponseCustom
{

    /**
     * @var ArrayOfMunicipalityHomePage $GetAllMunicipalityHomePagesResult
     */
    protected $GetAllMunicipalityHomePagesResult = null;

    /**
     * @param ArrayOfMunicipalityHomePage $GetAllMunicipalityHomePagesResult
     */
    public function __construct($GetAllMunicipalityHomePagesResult)
    {
      $this->GetAllMunicipalityHomePagesResult = $GetAllMunicipalityHomePagesResult;
    }

    /**
     * @return ArrayOfMunicipalityHomePage
     */
    public function getGetAllMunicipalityHomePagesResult()
    {
      return $this->GetAllMunicipalityHomePagesResult;
    }

    /**
     * @param ArrayOfMunicipalityHomePage $GetAllMunicipalityHomePagesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllMunicipalityHomePagesResponse
     */
    public function setGetAllMunicipalityHomePagesResult($GetAllMunicipalityHomePagesResult)
    {
      $this->GetAllMunicipalityHomePagesResult = $GetAllMunicipalityHomePagesResult;
      return $this;
    }

}
