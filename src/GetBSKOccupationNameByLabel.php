<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetBSKOccupationNameByLabel
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @param string $label
     */
    public function __construct($label)
    {
      $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \ArbetsformedlingenWsTaxonomi\GetBSKOccupationNameByLabel
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
