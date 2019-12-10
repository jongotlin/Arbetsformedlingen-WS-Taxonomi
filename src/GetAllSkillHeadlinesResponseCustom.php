<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSkillHeadlinesResponseCustom
{

    /**
     * @var ArrayOfSkillHeadline $GetAllSkillHeadlinesResult
     */
    protected $GetAllSkillHeadlinesResult = null;

    /**
     * @param ArrayOfSkillHeadline $GetAllSkillHeadlinesResult
     */
    public function __construct($GetAllSkillHeadlinesResult)
    {
      $this->GetAllSkillHeadlinesResult = $GetAllSkillHeadlinesResult;
    }

    /**
     * @return ArrayOfSkillHeadline
     */
    public function getGetAllSkillHeadlinesResult()
    {
      return $this->GetAllSkillHeadlinesResult;
    }

    /**
     * @param ArrayOfSkillHeadline $GetAllSkillHeadlinesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSkillHeadlinesResponse
     */
    public function setGetAllSkillHeadlinesResult($GetAllSkillHeadlinesResult)
    {
      $this->GetAllSkillHeadlinesResult = $GetAllSkillHeadlinesResult;
      return $this;
    }

}
