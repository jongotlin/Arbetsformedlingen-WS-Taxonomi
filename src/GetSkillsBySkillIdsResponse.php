<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillIdsResponse
{

    /**
     * @var ArrayOfSkill $GetSkillsBySkillIdsResult
     */
    protected $GetSkillsBySkillIdsResult = null;

    /**
     * @param ArrayOfSkill $GetSkillsBySkillIdsResult
     */
    public function __construct($GetSkillsBySkillIdsResult)
    {
      $this->GetSkillsBySkillIdsResult = $GetSkillsBySkillIdsResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillsBySkillIdsResult()
    {
      return $this->GetSkillsBySkillIdsResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillsBySkillIdsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIdsResponse
     */
    public function setGetSkillsBySkillIdsResult($GetSkillsBySkillIdsResult)
    {
      $this->GetSkillsBySkillIdsResult = $GetSkillsBySkillIdsResult;
      return $this;
    }

}
