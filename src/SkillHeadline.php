<?php

namespace ArbetsformedlingenWsTaxonomi;

class SkillHeadline
{

    /**
     * @var SkillMainHeadline $SkillMainHeadline
     */
    protected $SkillMainHeadline = null;

    /**
     * @var int $SkillHeadlineID
     */
    protected $SkillHeadlineID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $SkillHeadlineID
     */
    public function __construct($SkillHeadlineID)
    {
      $this->SkillHeadlineID = $SkillHeadlineID;
    }

    /**
     * @return SkillMainHeadline
     */
    public function getSkillMainHeadline()
    {
      return $this->SkillMainHeadline;
    }

    /**
     * @param SkillMainHeadline $SkillMainHeadline
     * @return \ArbetsformedlingenWsTaxonomi\SkillHeadline
     */
    public function setSkillMainHeadline($SkillMainHeadline)
    {
      $this->SkillMainHeadline = $SkillMainHeadline;
      return $this;
    }

    /**
     * @return int
     */
    public function getSkillHeadlineID()
    {
      return $this->SkillHeadlineID;
    }

    /**
     * @param int $SkillHeadlineID
     * @return \ArbetsformedlingenWsTaxonomi\SkillHeadline
     */
    public function setSkillHeadlineID($SkillHeadlineID)
    {
      $this->SkillHeadlineID = $SkillHeadlineID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SkillHeadline
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
