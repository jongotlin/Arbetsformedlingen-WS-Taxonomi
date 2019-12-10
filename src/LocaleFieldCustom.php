<?php

namespace ArbetsformedlingenWsTaxonomi;

class LocaleFieldCustom
{

    /**
     * @var int $LocaleFieldID
     */
    protected $LocaleFieldID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $LocaleFieldID
     */
    public function __construct($LocaleFieldID)
    {
      $this->LocaleFieldID = $LocaleFieldID;
    }

    /**
     * @return int
     */
    public function getLocaleFieldID()
    {
      return $this->LocaleFieldID;
    }

    /**
     * @param int $LocaleFieldID
     * @return \ArbetsformedlingenWsTaxonomi\LocaleField
     */
    public function setLocaleFieldID($LocaleFieldID)
    {
      $this->LocaleFieldID = $LocaleFieldID;
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleField
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleField
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
