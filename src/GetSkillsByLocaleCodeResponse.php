<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsByLocaleCodeResponse
{

    /**
     * @var ArrayOfSkill $GetSkillsByLocaleCodeResult
     */
    protected $GetSkillsByLocaleCodeResult = null;

    /**
     * @param ArrayOfSkill $GetSkillsByLocaleCodeResult
     */
    public function __construct($GetSkillsByLocaleCodeResult)
    {
      $this->GetSkillsByLocaleCodeResult = $GetSkillsByLocaleCodeResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillsByLocaleCodeResult()
    {
      return $this->GetSkillsByLocaleCodeResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillsByLocaleCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByLocaleCodeResponse
     */
    public function setGetSkillsByLocaleCodeResult($GetSkillsByLocaleCodeResult)
    {
      $this->GetSkillsByLocaleCodeResult = $GetSkillsByLocaleCodeResult;
      return $this;
    }

}
