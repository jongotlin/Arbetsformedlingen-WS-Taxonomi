<?php

namespace ArbetsformedlingenWsTaxonomi;

class BEFOccupationName
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
     * @return \ArbetsformedlingenWsTaxonomi\BEFOccupationName
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
     * @return \ArbetsformedlingenWsTaxonomi\BEFOccupationName
     */
    public function setOccupationNameID($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
      return $this;
    }

}
