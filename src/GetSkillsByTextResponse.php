<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsByTextResponse
{

    /**
     * @var ArrayOfSkill $GetSkillsByTextResult
     */
    protected $GetSkillsByTextResult = null;

    /**
     * @param ArrayOfSkill $GetSkillsByTextResult
     */
    public function __construct($GetSkillsByTextResult)
    {
      $this->GetSkillsByTextResult = $GetSkillsByTextResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillsByTextResult()
    {
      return $this->GetSkillsByTextResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillsByTextResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByTextResponse
     */
    public function setGetSkillsByTextResult($GetSkillsByTextResult)
    {
      $this->GetSkillsByTextResult = $GetSkillsByTextResult;
      return $this;
    }

}
