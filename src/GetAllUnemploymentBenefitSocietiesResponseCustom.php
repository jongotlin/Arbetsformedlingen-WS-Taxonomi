<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllUnemploymentBenefitSocietiesResponseCustom
{

    /**
     * @var ArrayOfUnemploymentBenefitSociety $GetAllUnemploymentBenefitSocietiesResult
     */
    protected $GetAllUnemploymentBenefitSocietiesResult = null;

    /**
     * @param ArrayOfUnemploymentBenefitSociety $GetAllUnemploymentBenefitSocietiesResult
     */
    public function __construct($GetAllUnemploymentBenefitSocietiesResult)
    {
      $this->GetAllUnemploymentBenefitSocietiesResult = $GetAllUnemploymentBenefitSocietiesResult;
    }

    /**
     * @return ArrayOfUnemploymentBenefitSociety
     */
    public function getGetAllUnemploymentBenefitSocietiesResult()
    {
      return $this->GetAllUnemploymentBenefitSocietiesResult;
    }

    /**
     * @param ArrayOfUnemploymentBenefitSociety $GetAllUnemploymentBenefitSocietiesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllUnemploymentBenefitSocietiesResponse
     */
    public function setGetAllUnemploymentBenefitSocietiesResult($GetAllUnemploymentBenefitSocietiesResult)
    {
      $this->GetAllUnemploymentBenefitSocietiesResult = $GetAllUnemploymentBenefitSocietiesResult;
      return $this;
    }

}
