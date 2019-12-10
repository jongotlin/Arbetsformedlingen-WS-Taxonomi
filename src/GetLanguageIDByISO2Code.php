<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLanguageIDByISO2Code
{

    /**
     * @var string $ISO2Code
     */
    protected $ISO2Code = null;

    /**
     * @param string $ISO2Code
     */
    public function __construct($ISO2Code)
    {
      $this->ISO2Code = $ISO2Code;
    }

    /**
     * @return string
     */
    public function getISO2Code()
    {
      return $this->ISO2Code;
    }

    /**
     * @param string $ISO2Code
     * @return \ArbetsformedlingenWsTaxonomi\GetLanguageIDByISO2Code
     */
    public function setISO2Code($ISO2Code)
    {
      $this->ISO2Code = $ISO2Code;
      return $this;
    }

}
