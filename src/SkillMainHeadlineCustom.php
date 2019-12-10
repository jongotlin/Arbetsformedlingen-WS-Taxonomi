<?php

namespace ArbetsformedlingenWsTaxonomi;

class SkillMainHeadlineCustom
{

    /**
     * @var int $SkillMainHeadlineID
     */
    protected $SkillMainHeadlineID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $SkillMainHeadlineID
     */
    public function __construct($SkillMainHeadlineID)
    {
      $this->SkillMainHeadlineID = $SkillMainHeadlineID;
    }

    /**
     * @return int
     */
    public function getSkillMainHeadlineID()
    {
      return $this->SkillMainHeadlineID;
    }

    /**
     * @param int $SkillMainHeadlineID
     * @return \ArbetsformedlingenWsTaxonomi\SkillMainHeadline
     */
    public function setSkillMainHeadlineID($SkillMainHeadlineID)
    {
      $this->SkillMainHeadlineID = $SkillMainHeadlineID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SkillMainHeadline
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
