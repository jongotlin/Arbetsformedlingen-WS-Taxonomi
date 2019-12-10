<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSUNField3ByGuide
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var int $SUNLevel1ID
     */
    protected $SUNLevel1ID = null;

    /**
     * @param int $languageId
     * @param int $SUNLevel1ID
     */
    public function __construct($languageId, $SUNLevel1ID)
    {
      $this->languageId = $languageId;
      $this->SUNLevel1ID = $SUNLevel1ID;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSUNField3ByGuide
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSUNLevel1ID()
    {
      return $this->SUNLevel1ID;
    }

    /**
     * @param int $SUNLevel1ID
     * @return \ArbetsformedlingenWsTaxonomi\GetSUNField3ByGuide
     */
    public function setSUNLevel1ID($SUNLevel1ID)
    {
      $this->SUNLevel1ID = $SUNLevel1ID;
      return $this;
    }

}
