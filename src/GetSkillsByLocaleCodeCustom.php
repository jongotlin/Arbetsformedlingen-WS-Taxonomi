<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsByLocaleCodeCustom
{

    /**
     * @var string $localCode
     */
    protected $localCode = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @param string $localCode
     * @param int $languageId
     */
    public function __construct($localCode, $languageId)
    {
      $this->localCode = $localCode;
      $this->languageId = $languageId;
    }

    /**
     * @return string
     */
    public function getLocalCode()
    {
      return $this->localCode;
    }

    /**
     * @param string $localCode
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByLocaleCode
     */
    public function setLocalCode($localCode)
    {
      $this->localCode = $localCode;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByLocaleCode
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

}
