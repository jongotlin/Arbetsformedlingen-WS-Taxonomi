<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillHeadlinesBySkillHeadlineIdsResponse
{

    /**
     * @var ArrayOfSkillHeadline $GetSkillHeadlinesBySkillHeadlineIdsResult
     */
    protected $GetSkillHeadlinesBySkillHeadlineIdsResult = null;

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesBySkillHeadlineIdsResult
     */
    public function __construct($GetSkillHeadlinesBySkillHeadlineIdsResult)
    {
      $this->GetSkillHeadlinesBySkillHeadlineIdsResult = $GetSkillHeadlinesBySkillHeadlineIdsResult;
    }

    /**
     * @return ArrayOfSkillHeadline
     */
    public function getGetSkillHeadlinesBySkillHeadlineIdsResult()
    {
      return $this->GetSkillHeadlinesBySkillHeadlineIdsResult;
    }

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesBySkillHeadlineIdsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillHeadlineIdsResponse
     */
    public function setGetSkillHeadlinesBySkillHeadlineIdsResult($GetSkillHeadlinesBySkillHeadlineIdsResult)
    {
      $this->GetSkillHeadlinesBySkillHeadlineIdsResult = $GetSkillHeadlinesBySkillHeadlineIdsResult;
      return $this;
    }

}
