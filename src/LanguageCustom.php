<?php

namespace ArbetsformedlingenWsTaxonomi;

class LanguageCustom
{

    /**
     * @var int $LanguageID
     */
    protected $LanguageID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $LanguageID
     */
    public function __construct($LanguageID)
    {
      $this->LanguageID = $LanguageID;
    }

    /**
     * @return int
     */
    public function getLanguageID()
    {
      return $this->LanguageID;
    }

    /**
     * @param int $LanguageID
     * @return \ArbetsformedlingenWsTaxonomi\Language
     */
    public function setLanguageID($LanguageID)
    {
      $this->LanguageID = $LanguageID;
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
     * @return \ArbetsformedlingenWsTaxonomi\Language
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
