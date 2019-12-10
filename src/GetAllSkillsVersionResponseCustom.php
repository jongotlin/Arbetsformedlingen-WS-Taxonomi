<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSkillsVersionResponseCustom
{

    /**
     * @var ArrayOfSkillVersion $GetAllSkillsVersionResult
     */
    protected $GetAllSkillsVersionResult = null;

    /**
     * @param ArrayOfSkillVersion $GetAllSkillsVersionResult
     */
    public function __construct($GetAllSkillsVersionResult)
    {
      $this->GetAllSkillsVersionResult = $GetAllSkillsVersionResult;
    }

    /**
     * @return ArrayOfSkillVersion
     */
    public function getGetAllSkillsVersionResult()
    {
      return $this->GetAllSkillsVersionResult;
    }

    /**
     * @param ArrayOfSkillVersion $GetAllSkillsVersionResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSkillsVersionResponse
     */
    public function setGetAllSkillsVersionResult($GetAllSkillsVersionResult)
    {
      $this->GetAllSkillsVersionResult = $GetAllSkillsVersionResult;
      return $this;
    }

}
