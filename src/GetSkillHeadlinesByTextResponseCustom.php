<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillHeadlinesByTextResponseCustom
{

    /**
     * @var ArrayOfSkillHeadline $GetSkillHeadlinesByTextResult
     */
    protected $GetSkillHeadlinesByTextResult = null;

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesByTextResult
     */
    public function __construct($GetSkillHeadlinesByTextResult)
    {
      $this->GetSkillHeadlinesByTextResult = $GetSkillHeadlinesByTextResult;
    }

    /**
     * @return ArrayOfSkillHeadline
     */
    public function getGetSkillHeadlinesByTextResult()
    {
      return $this->GetSkillHeadlinesByTextResult;
    }

    /**
     * @param ArrayOfSkillHeadline $GetSkillHeadlinesByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesByTextResponse
     */
    public function setGetSkillHeadlinesByTextResult($GetSkillHeadlinesByTextResult)
    {
      $this->GetSkillHeadlinesByTextResult = $GetSkillHeadlinesByTextResult;
      return $this;
    }

}
