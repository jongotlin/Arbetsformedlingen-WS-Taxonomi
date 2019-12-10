<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillMainHeadlineIdResponseCustom
{

    /**
     * @var ArrayOfSkill $GetSkillsBySkillMainHeadlineIdResult
     */
    protected $GetSkillsBySkillMainHeadlineIdResult = null;

    /**
     * @param ArrayOfSkill $GetSkillsBySkillMainHeadlineIdResult
     */
    public function __construct($GetSkillsBySkillMainHeadlineIdResult)
    {
      $this->GetSkillsBySkillMainHeadlineIdResult = $GetSkillsBySkillMainHeadlineIdResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillsBySkillMainHeadlineIdResult()
    {
      return $this->GetSkillsBySkillMainHeadlineIdResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillsBySkillMainHeadlineIdResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillMainHeadlineIdResponse
     */
    public function setGetSkillsBySkillMainHeadlineIdResult($GetSkillsBySkillMainHeadlineIdResult)
    {
      $this->GetSkillsBySkillMainHeadlineIdResult = $GetSkillsBySkillMainHeadlineIdResult;
      return $this;
    }

}
