<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAIDOccupationNameByLabelCustom
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
     * @return \ArbetsformedlingenWsTaxonomi\GetAIDOccupationNameByLabel
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
