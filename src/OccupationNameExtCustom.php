<?php

namespace ArbetsformedlingenWsTaxonomi;

class OccupationNameExtCustom
{

    /**
     * @var int $OccupationNameID
     */
    protected $OccupationNameID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $LocaleCode
     */
    protected $LocaleCode = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var int $VersionID
     */
    protected $VersionID = null;

    /**
     * @param int $OccupationNameID
     * @param boolean $Active
     * @param int $VersionID
     */
    public function __construct($OccupationNameID, $Active, $VersionID)
    {
      $this->OccupationNameID = $OccupationNameID;
      $this->Active = $Active;
      $this->VersionID = $VersionID;
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
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameExt
     */
    public function setOccupationNameID($OccupationNameID)
    {
      $this->OccupationNameID = $OccupationNameID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameExt
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
      return $this->LocaleCode;
    }

    /**
     * @param string $LocaleCode
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameExt
     */
    public function setLocaleCode($LocaleCode)
    {
      $this->LocaleCode = $LocaleCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameExt
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersionID()
    {
      return $this->VersionID;
    }

    /**
     * @param int $VersionID
     * @return \ArbetsformedlingenWsTaxonomi\OccupationNameExt
     */
    public function setVersionID($VersionID)
    {
      $this->VersionID = $VersionID;
      return $this;
    }

}
