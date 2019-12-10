<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllDrivingLicencesResponseCustom
{

    /**
     * @var ArrayOfDrivingLicence $GetAllDrivingLicencesResult
     */
    protected $GetAllDrivingLicencesResult = null;

    /**
     * @param ArrayOfDrivingLicence $GetAllDrivingLicencesResult
     */
    public function __construct($GetAllDrivingLicencesResult)
    {
      $this->GetAllDrivingLicencesResult = $GetAllDrivingLicencesResult;
    }

    /**
     * @return ArrayOfDrivingLicence
     */
    public function getGetAllDrivingLicencesResult()
    {
      return $this->GetAllDrivingLicencesResult;
    }

    /**
     * @param ArrayOfDrivingLicence $GetAllDrivingLicencesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllDrivingLicencesResponse
     */
    public function setGetAllDrivingLicencesResult($GetAllDrivingLicencesResult)
    {
      $this->GetAllDrivingLicencesResult = $GetAllDrivingLicencesResult;
      return $this;
    }

}
