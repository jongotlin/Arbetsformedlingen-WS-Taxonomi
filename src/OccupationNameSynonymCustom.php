<?php

namespace ArbetsformedlingenWsTaxonomi;

class OccupationNameSynonymCustom
{

    /**
     * @var int $PopularSynonymID
     */
    protected $PopularSynonymID = null;

    /**
     * @var string $SynonymTerm
     */
    protected $SynonymTerm = null;

    /**
     * @var int $OccupationNameID
     */
    protected $OccupationNameID = null;

    /**
     * @var string $OccupationNameTerm
     */
    protected $OccupationNameTerm = null;

    /**
     * @param int $PopularSynonymID
     * @param int $OccupationNameID
     */
    public function __construct($PopularSynonymID, $OccupationNameID)
    {
      $this->PopularSynonymID = $PopularSynonymID;
      $this->OccupationNameID = $OccupationNameID;
    }

    /**
     * @return int
     */
    public function getPopularSynonymID()
    {
      return $this->PopularSynonymID;
    }

    /**
     * @param int $PopularSynonymID
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameSynonym
     */
    public function setPopularSynonymID($PopularSynonymID)
    {
      $this->PopularSynonymID = $PopularSynonymID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSynonymTerm()
    {
      return $this->SynonymTerm;
    }

    /**
     * @param string $SynonymTerm
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameSynonym
     */
    public function setSynonymTerm($SynonymTerm)
    {
      $this->SynonymTerm = $SynonymTerm;
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
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameSynonym
     */
    public function setOccupationNameID($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOccupationNameTerm()
    {
      return $this->OccupationNameTerm;
    }

    /**
     * @param string $OccupationNameTerm
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameSynonym
     */
    public function setOccupationNameTerm($OccupationNameTerm)
    {
      $this->OccupationNameTerm = $OccupationNameTerm;
      return $this;
    }

}
