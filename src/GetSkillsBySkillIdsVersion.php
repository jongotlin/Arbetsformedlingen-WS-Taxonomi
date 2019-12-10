<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillIdsVersion
{

    /**
     * @var ArrayOfInt $skillIds
     */
    protected $skillIds = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfInt $skillIds
     * @param int $languageId
     */
    public function __construct($skillIds, $languageId)
    {
      $this->skillIds = $skillIds;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSkillIds()
    {
      return $this->skillIds;
    }

    /**
     * @param ArrayOfInt $skillIds
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIdsVersion
     */
    public function setSkillIds($skillIds)
    {
      $this->skillIds = $skillIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
      return $this->languageId;
    }

    /**
     * @param int $languageId
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIdsVersion
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
