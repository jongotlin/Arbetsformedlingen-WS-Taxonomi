<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillHeadlinesBySkillMainHeadlineIdCustom
{

    /**
     * @var int $skillMainHeadlineId
     */
    protected $skillMainHeadlineId = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $skillMainHeadlineId
     * @param int $languageId
     */
    public function __construct($skillMainHeadlineId, $languageId)
    {
      $this->skillMainHeadlineId = $skillMainHeadlineId;
      $this->languageId = $languageId;
    }

    /**
     * @return int
     */
    public function getSkillMainHeadlineId()
    {
      return $this->skillMainHeadlineId;
    }

    /**
     * @param int $skillMainHeadlineId
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillMainHeadlineId
     */
    public function setSkillMainHeadlineId($skillMainHeadlineId)
    {
      $this->skillMainHeadlineId = $skillMainHeadlineId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillHeadlinesBySkillMainHeadlineId
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
