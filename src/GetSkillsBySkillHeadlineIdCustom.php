<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsBySkillHeadlineIdCustom
{

    /**
     * @var int $skillHeadlineId
     */
    protected $skillHeadlineId = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $skillHeadlineId
     * @param int $languageId
     */
    public function __construct($skillHeadlineId, $languageId)
    {
      $this->skillHeadlineId = $skillHeadlineId;
      $this->languageId = $languageId;
    }

    /**
     * @return int
     */
    public function getSkillHeadlineId()
    {
      return $this->skillHeadlineId;
    }

    /**
     * @param int $skillHeadlineId
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillHeadlineId
     */
    public function setSkillHeadlineId($skillHeadlineId)
    {
      $this->skillHeadlineId = $skillHeadlineId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsBySkillHeadlineId
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
