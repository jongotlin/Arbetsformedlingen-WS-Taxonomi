<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillMainHeadlinesBySkillMainHeadlineIds
{

    /**
     * @var ArrayOfInt $skillMainHeadlineIds
     */
    protected $skillMainHeadlineIds = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfInt $skillMainHeadlineIds
     * @param int $languageId
     */
    public function __construct($skillMainHeadlineIds, $languageId)
    {
      $this->skillMainHeadlineIds = $skillMainHeadlineIds;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSkillMainHeadlineIds()
    {
      return $this->skillMainHeadlineIds;
    }

    /**
     * @param ArrayOfInt $skillMainHeadlineIds
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillMainHeadlinesBySkillMainHeadlineIds
     */
    public function setSkillMainHeadlineIds($skillMainHeadlineIds)
    {
      $this->skillMainHeadlineIds = $skillMainHeadlineIds;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillMainHeadlinesBySkillMainHeadlineIds
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
