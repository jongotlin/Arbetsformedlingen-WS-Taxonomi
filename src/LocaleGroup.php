<?php

namespace ArbetsformedlingenWsTaxonomi;

class LocaleGroup
{

    /**
     * @var int $LocaleGroupID
     */
    protected $LocaleGroupID = null;

    /**
     * @var string $LocaleCode
     */
    protected $LocaleCode = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $LocaleFieldID
     */
    protected $LocaleFieldID = null;

    /**
     * @var string $LocaleLevel3Code
     */
    protected $LocaleLevel3Code = null;

    /**
     * @param int $LocaleGroupID
     * @param int $LocaleFieldID
     */
    public function __construct($LocaleGroupID, $LocaleFieldID)
    {
      $this->LocaleGroupID = $LocaleGroupID;
      $this->LocaleFieldID = $LocaleFieldID;
    }

    /**
     * @return int
     */
    public function getLocaleGroupID()
    {
      return $this->LocaleGroupID;
    }

    /**
     * @param int $LocaleGroupID
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
     */
    public function setLocaleGroupID($LocaleGroupID)
    {
      $this->LocaleGroupID = $LocaleGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->LocaleCode;
    }

    /**
     * @param string $LocaleCode
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
     */
    public function setLocaleCode($LocaleCode)
    {
      $this->LocaleCode = $LocaleCode;
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
     */
    public function setLocaleFieldID($LocaleFieldID)
    {
      $this->LocaleFieldID = $LocaleFieldID;
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
     * @return \ArbetsformedlingenWsTaxonomi\LocaleGroup
     */
    public function setLocaleLevel3Code($LocaleLevel3Code)
    {
      $this->LocaleLevel3Code = $LocaleLevel3Code;
      return $this;
    }

}
