<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupSkillsByLocaleCodeResponseCustom
{

    /**
     * @var ArrayOfLocaleGroupSkill $GetLocaleGroupSkillsByLocaleCodeResult
     */
    protected $GetLocaleGroupSkillsByLocaleCodeResult = null;

    /**
     * @param ArrayOfLocaleGroupSkill $GetLocaleGroupSkillsByLocaleCodeResult
     */
    public function __construct($GetLocaleGroupSkillsByLocaleCodeResult)
    {
      $this->GetLocaleGroupSkillsByLocaleCodeResult = $GetLocaleGroupSkillsByLocaleCodeResult;
    }

    /**
     * @return ArrayOfLocaleGroupSkill
     */
    public function getGetLocaleGroupSkillsByLocaleCodeResult()
    {
      return $this->GetLocaleGroupSkillsByLocaleCodeResult;
    }

    /**
     * @param ArrayOfLocaleGroupSkill $GetLocaleGroupSkillsByLocaleCodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupSkillsByLocaleCodeResponse
     */
    public function setGetLocaleGroupSkillsByLocaleCodeResult($GetLocaleGroupSkillsByLocaleCodeResult)
    {
      $this->GetLocaleGroupSkillsByLocaleCodeResult = $GetLocaleGroupSkillsByLocaleCodeResult;
      return $this;
    }

}
