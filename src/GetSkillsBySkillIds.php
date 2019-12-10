<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillIds
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIds
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillIds
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
