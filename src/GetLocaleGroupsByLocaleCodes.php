<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupsByLocaleCodes
{

    /**
     * @var ArrayOfString $localeCodes
     */
    protected $localeCodes = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfString $localeCodes
     * @param int $languageId
     */
    public function __construct($localeCodes, $languageId)
    {
      $this->localeCodes = $localeCodes;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfString
     */
    public function getLocaleCodes()
    {
      return $this->localeCodes;
    }

    /**
     * @param ArrayOfString $localeCodes
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleCodes
     */
    public function setLocaleCodes($localeCodes)
    {
      $this->localeCodes = $localeCodes;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupsByLocaleCodes
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
