<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLocaleGroupSkillsResponse
{

    /**
     * @var ArrayOfLocaleGroupSkill $GetAllLocaleGroupSkillsResult
     */
    protected $GetAllLocaleGroupSkillsResult = null;

    /**
     * @param ArrayOfLocaleGroupSkill $GetAllLocaleGroupSkillsResult
     */
    public function __construct($GetAllLocaleGroupSkillsResult)
    {
      $this->GetAllLocaleGroupSkillsResult = $GetAllLocaleGroupSkillsResult;
    }

    /**
     * @return ArrayOfLocaleGroupSkill
     */
    public function getGetAllLocaleGroupSkillsResult()
    {
      return $this->GetAllLocaleGroupSkillsResult;
    }

    /**
     * @param ArrayOfLocaleGroupSkill $GetAllLocaleGroupSkillsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLocaleGroupSkillsResponse
     */
    public function setGetAllLocaleGroupSkillsResult($GetAllLocaleGroupSkillsResult)
    {
      $this->GetAllLocaleGroupSkillsResult = $GetAllLocaleGroupSkillsResult;
      return $this;
    }

}
