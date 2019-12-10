<?php

namespace ArbetsformedlingenWsTaxonomi;

class LocaleGroupSkillCustom
{

    /**
     * @var string $LocaleCode
     */
    protected $LocaleCode = null;

    /**
     * @var int $SkillID
     */
    protected $SkillID = null;

    /**
     * @param int $SkillID
     */
    public function __construct($SkillID)
    {
      $this->SkillID = $SkillID;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->LocaleCode;
    }

    /**
     * @param string $LocaleCode
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroupSkill
     */
    public function setLocaleCode($LocaleCode)
    {
      $this->LocaleCode = $LocaleCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getSkillID()
    {
      return $this->SkillID;
    }

    /**
     * @param int $SkillID
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroupSkill
     */
    public function setSkillID($SkillID)
    {
      $this->SkillID = $SkillID;
      return $this;
    }

}
