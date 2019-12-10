<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse
{

    /**
     * @var ArrayOfSkillMainHeadline $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult
     */
    protected $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult = null;

    /**
     * @param ArrayOfSkillMainHeadline $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult
     */
    public function __construct($GetSkillMainHeadlinesBySkillMainHeadlineIdsResult)
    {
      $this->GetSkillMainHeadlinesBySkillMainHeadlineIdsResult = $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult;
    }

    /**
     * @return ArrayOfSkillMainHeadline
     */
    public function getGetSkillMainHeadlinesBySkillMainHeadlineIdsResult()
    {
      return $this->GetSkillMainHeadlinesBySkillMainHeadlineIdsResult;
    }

    /**
     * @param ArrayOfSkillMainHeadline $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse
     */
    public function setGetSkillMainHeadlinesBySkillMainHeadlineIdsResult($GetSkillMainHeadlinesBySkillMainHeadlineIdsResult)
    {
      $this->GetSkillMainHeadlinesBySkillMainHeadlineIdsResult = $GetSkillMainHeadlinesBySkillMainHeadlineIdsResult;
      return $this;
    }

}
