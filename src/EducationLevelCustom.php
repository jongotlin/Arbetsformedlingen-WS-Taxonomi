<?php

namespace ArbetsformedlingenWsTaxonomi;

class EducationLevelCustom
{

    /**
     * @var int $EducationLevelID
     */
    protected $EducationLevelID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $EducationLevelID
     */
    public function __construct($EducationLevelID)
    {
      $this->EducationLevelID = $EducationLevelID;
    }

    /**
     * @return int
     */
    public function getEducationLevelID()
    {
      return $this->EducationLevelID;
    }

    /**
     * @param int $EducationLevelID
     * @return \ArbetsformedlingenWsTaxonomi\EducationLevel
     */
    public function setEducationLevelID($EducationLevelID)
    {
      $this->EducationLevelID = $EducationLevelID;
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
     * @return \ArbetsformedlingenWsTaxonomi\EducationLevel
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ArbetsformedlingenWsTaxonomi\EducationLevel
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
