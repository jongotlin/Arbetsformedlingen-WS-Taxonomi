<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLocaleGroupsResponse
{

    /**
     * @var ArrayOfLocaleGroup $GetAllLocaleGroupsResult
     */
    protected $GetAllLocaleGroupsResult = null;

    /**
     * @param ArrayOfLocaleGroup $GetAllLocaleGroupsResult
     */
    public function __construct($GetAllLocaleGroupsResult)
    {
      $this->GetAllLocaleGroupsResult = $GetAllLocaleGroupsResult;
    }

    /**
     * @return ArrayOfLocaleGroup
     */
    public function getGetAllLocaleGroupsResult()
    {
      return $this->GetAllLocaleGroupsResult;
    }

    /**
     * @param ArrayOfLocaleGroup $GetAllLocaleGroupsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLocaleGroupsResponse
     */
    public function setGetAllLocaleGroupsResult($GetAllLocaleGroupsResult)
    {
      $this->GetAllLocaleGroupsResult = $GetAllLocaleGroupsResult;
      return $this;
    }

}
