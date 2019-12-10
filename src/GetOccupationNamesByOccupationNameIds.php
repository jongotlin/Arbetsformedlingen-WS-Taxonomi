<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetOccupationNamesByOccupationNameIds
{

    /**
     * @var ArrayOfInt $occupationNameIds
     */
    protected $occupationNameIds = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param ArrayOfInt $occupationNameIds
     * @param int $languageId
     */
    public function __construct($occupationNameIds, $languageId)
    {
      $this->occupationNameIds = $occupationNameIds;
      $this->languageId = $languageId;
    }

    /**
     * @return ArrayOfInt
     */
    public function getOccupationNameIds()
    {
      return $this->occupationNameIds;
    }

    /**
     * @param ArrayOfInt $occupationNameIds
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByOccupationNameIds
     */
    public function setOccupationNameIds($occupationNameIds)
    {
      $this->occupationNameIds = $occupationNameIds;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetOccupationNamesByOccupationNameIds
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
