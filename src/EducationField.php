<?php

namespace ArbetsformedlingenWsTaxonomi;

class EducationField
{

    /**
     * @var int $EducationFieldID
     */
    protected $EducationFieldID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $EducationFieldID
     */
    public function __construct($EducationFieldID)
    {
      $this->EducationFieldID = $EducationFieldID;
    }

    /**
     * @return int
     */
    public function getEducationFieldID()
    {
      return $this->EducationFieldID;
    }

    /**
     * @param int $EducationFieldID
     * @return \ArbetsformedlingenWsTaxonomi\EducationField
     */
    public function setEducationFieldID($EducationFieldID)
    {
      $this->EducationFieldID = $EducationFieldID;
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
     * @return \ArbetsformedlingenWsTaxonomi\EducationField
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
     * @return \ArbetsformedlingenWsTaxonomi\EducationField
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
