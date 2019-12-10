<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetISCOByLocaleCode
{

    /**
     * @var string $localeCode
     */
    protected $localeCode = null;

    /**
     * @param string $localeCode
     */
    public function __construct($localeCode)
    {
      $this->localeCode = $localeCode;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->localeCode;
    }

    /**
     * @param string $localeCode
     * @return \ArbetsformedlingenWsTaxonomi\GetISCOByLocaleCode
     */
    public function setLocaleCode($localeCode)
    {
      $this->localeCode = $localeCode;
      return $this;
    }

}
