<?php

namespace ArbetsformedlingenWsTaxonomi;

class LocaleLevel3
{

    /**
     * @var int $LocaleLevel3ID
     */
    protected $LocaleLevel3ID = null;

    /**
     * @var string $LocaleLevel3Code
     */
    protected $LocaleLevel3Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $LocaleLevel3ID
     */
    public function __construct($LocaleLevel3ID)
    {
      $this->LocaleLevel3ID = $LocaleLevel3ID;
    }

    /**
     * @return int
     */
    public function getLocaleLevel3ID()
    {
      return $this->LocaleLevel3ID;
    }

    /**
     * @param int $LocaleLevel3ID
     * @return \ArbetsformedlingenWsTaxonomi\LocaleLevel3
     */
    public function setLocaleLevel3ID($LocaleLevel3ID)
    {
      $this->LocaleLevel3ID = $LocaleLevel3ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleLevel3Code()
    {
      return $this->LocaleLevel3Code;
    }

    /**
     * @param string $LocaleLevel3Code
     * @return \ArbetsformedlingenWsTaxonomi\LocaleLevel3
     */
    public function setLocaleLevel3Code($LocaleLevel3Code)
    {
      $this->LocaleLevel3Code = $LocaleLevel3Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleLevel3
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
