<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillHeadlinesBySkillHeadlineIdsCustom
{

    /**
     * @var ArrayOfInt $skillHeadlineIds
     */
    protected $skillHeadlineIds = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfInt $skillHeadlineIds
     * @param int $languageId
     */
    public function __construct($skillHeadlineIds, $languageId)
    {
      $this->skillHeadlineIds = $skillHeadlineIds;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSkillHeadlineIds()
    {
      return $this->skillHeadlineIds;
    }

    /**
     * @param ArrayOfInt $skillHeadlineIds
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillHeadlineIds
     */
    public function setSkillHeadlineIds($skillHeadlineIds)
    {
      $this->skillHeadlineIds = $skillHeadlineIds;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillHeadlineIds
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
