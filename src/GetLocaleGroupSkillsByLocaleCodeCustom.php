<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleGroupSkillsByLocaleCodeCustom
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
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleGroupSkillsByLocaleCode
     */
    public function setLocaleCode($localeCode)
    {
      $this->localeCode = $localeCode;
      return $this;
    }

}
