<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillMainHeadlinesByTextResponse
{

    /**
     * @var ArrayOfSkillMainHeadline $GetSkillMainHeadlinesByTextResult
     */
    protected $GetSkillMainHeadlinesByTextResult = null;

    /**
     * @param ArrayOfSkillMainHeadline $GetSkillMainHeadlinesByTextResult
     */
    public function __construct($GetSkillMainHeadlinesByTextResult)
    {
      $this->GetSkillMainHeadlinesByTextResult = $GetSkillMainHeadlinesByTextResult;
    }

    /**
     * @return ArrayOfSkillMainHeadline
     */
    public function getGetSkillMainHeadlinesByTextResult()
    {
      return $this->GetSkillMainHeadlinesByTextResult;
    }

    /**
     * @param ArrayOfSkillMainHeadline $GetSkillMainHeadlinesByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillMainHeadlinesByTextResponse
     */
    public function setGetSkillMainHeadlinesByTextResult($GetSkillMainHeadlinesByTextResult)
    {
      $this->GetSkillMainHeadlinesByTextResult = $GetSkillMainHeadlinesByTextResult;
      return $this;
    }

}
