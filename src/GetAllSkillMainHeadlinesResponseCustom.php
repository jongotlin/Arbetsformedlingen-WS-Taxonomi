<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSkillMainHeadlinesResponseCustom
{

    /**
     * @var ArrayOfSkillMainHeadline $GetAllSkillMainHeadlinesResult
     */
    protected $GetAllSkillMainHeadlinesResult = null;

    /**
     * @param ArrayOfSkillMainHeadline $GetAllSkillMainHeadlinesResult
     */
    public function __construct($GetAllSkillMainHeadlinesResult)
    {
      $this->GetAllSkillMainHeadlinesResult = $GetAllSkillMainHeadlinesResult;
    }

    /**
     * @return ArrayOfSkillMainHeadline
     */
    public function getGetAllSkillMainHeadlinesResult()
    {
      return $this->GetAllSkillMainHeadlinesResult;
    }

    /**
     * @param ArrayOfSkillMainHeadline $GetAllSkillMainHeadlinesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSkillMainHeadlinesResponse
     */
    public function setGetAllSkillMainHeadlinesResult($GetAllSkillMainHeadlinesResult)
    {
      $this->GetAllSkillMainHeadlinesResult = $GetAllSkillMainHeadlinesResult;
      return $this;
    }

}
