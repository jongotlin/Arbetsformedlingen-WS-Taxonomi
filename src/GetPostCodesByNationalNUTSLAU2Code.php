<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByNationalNUTSLAU2Code
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var string $NUTSCode
     */
    protected $NUTSCode = null;

    /**
     * @param int $languageId
     * @param string $NUTSCode
     */
    public function __construct($languageId, $NUTSCode)
    {
      $this->languageId = $languageId;
      $this->NUTSCode = $NUTSCode;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByNationalNUTSLAU2Code
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNUTSCode()
    {
      return $this->NUTSCode;
    }

    /**
     * @param string $NUTSCode
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByNationalNUTSLAU2Code
     */
    public function setNUTSCode($NUTSCode)
    {
      $this->NUTSCode = $NUTSCode;
      return $this;
    }

}
