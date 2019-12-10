<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleFieldsByLocaleCodeCustom
{

    /**
     * @var string $localeCode
     */
    protected $localeCode = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param string $localeCode
     * @param int $languageId
     */
    public function __construct($localeCode, $languageId)
    {
      $this->localeCode = $localeCode;
      $this->languageId = $languageId;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->localeCode;
    }

    /**
     * @param string $localeCode
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleCode
     */
    public function setLocaleCode($localeCode)
    {
      $this->localeCode = $localeCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
      return $this->languageId;
    }

    /**
     * @param int $languageId
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleCode
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
