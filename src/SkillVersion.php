<?php

namespace ArbetsformedlingenWsTaxonomi;

class SkillVersion
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
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var int $VersionID
     */
    protected $VersionID = null;

    /**
     * @param int $SkillID
     * @param boolean $Active
     * @param int $VersionID
     */
    public function __construct($SkillID, $Active, $VersionID)
    {
      $this->SkillID = $SkillID;
      $this->Active = $Active;
      $this->VersionID = $VersionID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SkillVersion
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
     * @return \ArbetsformedlingenWsTaxonomi\SkillVersion
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
     * @return \ArbetsformedlingenWsTaxonomi\SkillVersion
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \ArbetsformedlingenWsTaxonomi\SkillVersion
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersionID()
    {
      return $this->VersionID;
    }

    /**
     * @param int $VersionID
     * @return \ArbetsformedlingenWsTaxonomi\SkillVersion
     */
    public function setVersionID($VersionID)
    {
      $this->VersionID = $VersionID;
      return $this;
    }

}
