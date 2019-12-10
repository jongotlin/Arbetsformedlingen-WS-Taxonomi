<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllMunicipalitiesResponseCustom
{

    /**
     * @var ArrayOfMunicipality $GetAllMunicipalitiesResult
     */
    protected $GetAllMunicipalitiesResult = null;

    /**
     * @param ArrayOfMunicipality $GetAllMunicipalitiesResult
     */
    public function __construct($GetAllMunicipalitiesResult)
    {
      $this->GetAllMunicipalitiesResult = $GetAllMunicipalitiesResult;
    }

    /**
     * @return ArrayOfMunicipality
     */
    public function getGetAllMunicipalitiesResult()
    {
      return $this->GetAllMunicipalitiesResult;
    }

    /**
     * @param ArrayOfMunicipality $GetAllMunicipalitiesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllMunicipalitiesResponse
     */
    public function setGetAllMunicipalitiesResult($GetAllMunicipalitiesResult)
    {
      $this->GetAllMunicipalitiesResult = $GetAllMunicipalitiesResult;
      return $this;
    }

}
