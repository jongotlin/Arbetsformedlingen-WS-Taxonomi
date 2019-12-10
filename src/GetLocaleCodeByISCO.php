<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetLocaleCodeByISCO
{

    /**
     * @var string $ISCO
     */
    protected $ISCO = null;

    /**
     * @param string $ISCO
     */
    public function __construct($ISCO)
    {
      $this->ISCO = $ISCO;
    }

    /**
     * @return string
     */
    public function getISCO()
    {
      return $this->ISCO;
    }

    /**
     * @param string $ISCO
     * @return \ArbetsformedlingenWsTaxonomi\GetLocaleCodeByISCO
     */
    public function setISCO($ISCO)
    {
      $this->ISCO = $ISCO;
      return $this;
    }

}
