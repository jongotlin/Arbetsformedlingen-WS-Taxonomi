<?php

namespace ArbetsformedlingenWsTaxonomi;

class LanguageISO extends Language
{

    /**
     * @var string $ISOCode
     */
    protected $ISOCode = null;

    /**
     * @var string $ISO2Code
     */
    protected $ISO2Code = null;

    /**
     * @param int $LanguageID
     */
    public function __construct($LanguageID)
    {
      parent::__construct($LanguageID);
    }

    /**
     * @return string
     */
    public function getISOCode()
    {
      return $this->ISOCode;
    }

    /**
     * @param string $ISOCode
     * @return \ArbetsformedlingenWsTaxonomi\LanguageISO
     */
    public function setISOCode($ISOCode)
    {
      $this->ISOCode = $ISOCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getISO2Code()
    {
      return $this->ISO2Code;
    }

    /**
     * @param string $ISO2Code
     * @return \ArbetsformedlingenWsTaxonomi\LanguageISO
     */
    public function setISO2Code($ISO2Code)
    {
      $this->ISO2Code = $ISO2Code;
      return $this;
    }

}
