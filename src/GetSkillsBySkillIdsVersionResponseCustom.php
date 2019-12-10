<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillIdsVersionResponseCustom
{

    /**
     * @var ArrayOfSkillVersion $GetSkillsBySkillIdsVersionResult
     */
    protected $GetSkillsBySkillIdsVersionResult = null;

    /**
     * @param ArrayOfSkillVersion $GetSkillsBySkillIdsVersionResult
     */
    public function __construct($GetSkillsBySkillIdsVersionResult)
    {
      $this->GetSkillsBySkillIdsVersionResult = $GetSkillsBySkillIdsVersionResult;
    }

    /**
     * @return ArrayOfSkillVersion
     */
    public function getGetSkillsBySkillIdsVersionResult()
    {
      return $this->GetSkillsBySkillIdsVersionResult;
    }

    /**
     * @param ArrayOfSkillVersion $GetSkillsBySkillIdsVersionResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIdsVersionResponse
     */
    public function setGetSkillsBySkillIdsVersionResult($GetSkillsBySkillIdsVersionResult)
    {
      $this->GetSkillsBySkillIdsVersionResult = $GetSkillsBySkillIdsVersionResult;
      return $this;
    }

}
