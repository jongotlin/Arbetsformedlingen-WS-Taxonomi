<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSNILevel1Custom
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $languageId
     */
    public function __construct($languageId)
    {
      $this->languageId = $languageId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSNILevel1
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
