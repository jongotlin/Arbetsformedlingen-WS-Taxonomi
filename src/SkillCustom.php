<?php

namespace ArbetsformedlingenWsTaxonomi;

class SkillCustom
{

    /**
     * @var SkillHeadline $SkillHeadline
     */
    protected $SkillHeadline = null;

    /**
     * @var int $SkillID
     */
    protected $SkillID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $SkillID
     */
    public function __construct($SkillID)
    {
      $this->SkillID = $SkillID;
    }

    /**
     * @return SkillHeadline
     */
    public function getSkillHeadline()
    {
      return $this->SkillHeadline;
    }

    /**
     * @param SkillHeadline $SkillHeadline
     * @return \ArbetsformedlingenWsTaxonomi\Skill
     */
    public function setSkillHeadline($SkillHeadline)
    {
      $this->SkillHeadline = $SkillHeadline;
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
     * @return \ArbetsformedlingenWsTaxonomi\Skill
     */
    public function setSkillID($SkillID)
    {
      $this->SkillID = $SkillID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \ArbetsformedlingenWsTaxonomi\Skill
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
