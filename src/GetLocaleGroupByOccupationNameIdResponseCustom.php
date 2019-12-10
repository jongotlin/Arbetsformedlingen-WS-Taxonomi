<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupByOccupationNameIdResponseCustom
{

    /**
     * @var LocaleGroup $GetLocaleGroupByOccupationNameIdResult
     */
    protected $GetLocaleGroupByOccupationNameIdResult = null;

    /**
     * @param LocaleGroup $GetLocaleGroupByOccupationNameIdResult
     */
    public function __construct($GetLocaleGroupByOccupationNameIdResult)
    {
      $this->GetLocaleGroupByOccupationNameIdResult = $GetLocaleGroupByOccupationNameIdResult;
    }

    /**
     * @return LocaleGroup
     */
    public function getGetLocaleGroupByOccupationNameIdResult()
    {
      return $this->GetLocaleGroupByOccupationNameIdResult;
    }

    /**
     * @param LocaleGroup $GetLocaleGroupByOccupationNameIdResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupByOccupationNameIdResponse
     */
    public function setGetLocaleGroupByOccupationNameIdResult($GetLocaleGroupByOccupationNameIdResult)
    {
      $this->GetLocaleGroupByOccupationNameIdResult = $GetLocaleGroupByOccupationNameIdResult;
      return $this;
    }

}
