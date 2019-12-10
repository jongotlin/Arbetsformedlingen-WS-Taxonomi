<?php

namespace ArbetsformedlingenWsTaxonomi;

class LanguageLevelCustom
{

    /**
     * @var int $LanguageLevelID
     */
    protected $LanguageLevelID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $LanguageLevelID
     */
    public function __construct($LanguageLevelID)
    {
      $this->LanguageLevelID = $LanguageLevelID;
    }

    /**
     * @return int
     */
    public function getLanguageLevelID()
    {
      return $this->LanguageLevelID;
    }

    /**
     * @param int $LanguageLevelID
     * @return \ArbetsformedlingenWsTaxonomi\LanguageLevel
     */
    public function setLanguageLevelID($LanguageLevelID)
    {
      $this->LanguageLevelID = $LanguageLevelID;
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
     * @return \ArbetsformedlingenWsTaxonomi\LanguageLevel
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
