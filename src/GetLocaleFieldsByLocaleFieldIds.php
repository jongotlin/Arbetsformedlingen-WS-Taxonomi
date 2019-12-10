<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleFieldsByLocaleFieldIds
{

    /**
     * @var ArrayOfInt $localeFieldIds
     */
    protected $localeFieldIds = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfInt $localeFieldIds
     * @param int $languageId
     */
    public function __construct($localeFieldIds, $languageId)
    {
      $this->localeFieldIds = $localeFieldIds;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocaleFieldIds()
    {
      return $this->localeFieldIds;
    }

    /**
     * @param ArrayOfInt $localeFieldIds
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleFieldIds
     */
    public function setLocaleFieldIds($localeFieldIds)
    {
      $this->localeFieldIds = $localeFieldIds;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleFieldsByLocaleFieldIds
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
