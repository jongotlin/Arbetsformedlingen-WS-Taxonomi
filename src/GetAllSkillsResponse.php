<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSkillsResponse
{

    /**
     * @var ArrayOfSkill $GetAllSkillsResult
     */
    protected $GetAllSkillsResult = null;

    /**
     * @param ArrayOfSkill $GetAllSkillsResult
     */
    public function __construct($GetAllSkillsResult)
    {
      $this->GetAllSkillsResult = $GetAllSkillsResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetAllSkillsResult()
    {
      return $this->GetAllSkillsResult;
    }

    /**
     * @param ArrayOfSkill $GetAllSkillsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSkillsResponse
     */
    public function setGetAllSkillsResult($GetAllSkillsResult)
    {
      $this->GetAllSkillsResult = $GetAllSkillsResult;
      return $this;
    }

}
