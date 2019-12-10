<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillHeadlineIdResponseCustom
{

    /**
     * @var ArrayOfSkill $GetSkillsBySkillHeadlineIdResult
     */
    protected $GetSkillsBySkillHeadlineIdResult = null;

    /**
     * @param ArrayOfSkill $GetSkillsBySkillHeadlineIdResult
     */
    public function __construct($GetSkillsBySkillHeadlineIdResult)
    {
      $this->GetSkillsBySkillHeadlineIdResult = $GetSkillsBySkillHeadlineIdResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillsBySkillHeadlineIdResult()
    {
      return $this->GetSkillsBySkillHeadlineIdResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillsBySkillHeadlineIdResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillHeadlineIdResponse
     */
    public function setGetSkillsBySkillHeadlineIdResult($GetSkillsBySkillHeadlineIdResult)
    {
      $this->GetSkillsBySkillHeadlineIdResult = $GetSkillsBySkillHeadlineIdResult;
      return $this;
    }

}
