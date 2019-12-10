<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillHeadlinesBySkillMainHeadlineIdResponseCustom
{

    /**
     * @var ArrayOfSkillHeadline $GetSkillHeadlinesBySkillMainHeadlineIdResult
     */
    protected $GetSkillHeadlinesBySkillMainHeadlineIdResult = null;

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesBySkillMainHeadlineIdResult
     */
    public function __construct($GetSkillHeadlinesBySkillMainHeadlineIdResult)
    {
      $this->GetSkillHeadlinesBySkillMainHeadlineIdResult = $GetSkillHeadlinesBySkillMainHeadlineIdResult;
    }

    /**
     * @return ArrayOfSkillHeadline
     */
    public function getGetSkillHeadlinesBySkillMainHeadlineIdResult()
    {
      return $this->GetSkillHeadlinesBySkillMainHeadlineIdResult;
    }

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesBySkillMainHeadlineIdResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillMainHeadlineIdResponse
     */
    public function setGetSkillHeadlinesBySkillMainHeadlineIdResult($GetSkillHeadlinesBySkillMainHeadlineIdResult)
    {
      $this->GetSkillHeadlinesBySkillMainHeadlineIdResult = $GetSkillHeadlinesBySkillMainHeadlineIdResult;
      return $this;
    }

}
