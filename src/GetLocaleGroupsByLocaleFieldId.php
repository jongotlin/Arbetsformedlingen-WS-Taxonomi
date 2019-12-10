<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupsByLocaleFieldId
{

    /**
     * @var int $localeFieldId
     */
    protected $localeFieldId = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $localeFieldId
     * @param int $languageId
     */
    public function __construct($localeFieldId, $languageId)
    {
      $this->localeFieldId = $localeFieldId;
      $this->languageId = $languageId;
    }

    /**
     * @return int
     */
    public function getLocaleFieldId()
    {
      return $this->localeFieldId;
    }

    /**
     * @param int $localeFieldId
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleFieldId
     */
    public function setLocaleFieldId($localeFieldId)
    {
      $this->localeFieldId = $localeFieldId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleFieldId
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
