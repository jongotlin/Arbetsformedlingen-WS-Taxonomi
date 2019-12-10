<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupByOccupationNameId
{

    /**
     * @var int $occupationNameId
     */
    protected $occupationNameId = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param int $occupationNameId
     * @param int $languageId
     */
    public function __construct($occupationNameId, $languageId)
    {
      $this->occupationNameId = $occupationNameId;
      $this->languageId = $languageId;
    }

    /**
     * @return int
     */
    public function getOccupationNameId()
    {
      return $this->occupationNameId;
    }

    /**
     * @param int $occupationNameId
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupByOccupationNameId
     */
    public function setOccupationNameId($occupationNameId)
    {
      $this->occupationNameId = $occupationNameId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupByOccupationNameId
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
