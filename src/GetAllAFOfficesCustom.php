<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllAFOfficesCustom
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
     * @return \ArbetsformedlingenWsTaxonomi\GetAllAFOffices
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
