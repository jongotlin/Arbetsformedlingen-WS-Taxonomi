<?php

namespace ArbetsformedlingenWsTaxonomi;

class AIDOccupationName
{

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var int $OccupationNameID
     */
    protected $OccupationNameID = null;

    /**
     * @param int $OccupationNameID
     */
    public function __construct($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \ArbetsformedlingenWsTaxonomi\AIDOccupationName
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return int
     */
    public function getOccupationNameID()
    {
      return $this->OccupationNameID;
    }

    /**
     * @param int $OccupationNameID
     * @return \ArbetsformedlingenWsTaxonomi\AIDOccupationName
     */
    public function setOccupationNameID($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
      return $this;
    }

}
