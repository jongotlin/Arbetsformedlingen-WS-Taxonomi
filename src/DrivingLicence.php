<?php

namespace ArbetsformedlingenWsTaxonomi;

class DrivingLicence
{

    /**
     * @var int $DrivingLicenceID
     */
    protected $DrivingLicenceID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DrivingLicenceCode
     */
    protected $DrivingLicenceCode = null;

    /**
     * @var string $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $DrivingLicenceID
     */
    public function __construct($DrivingLicenceID)
    {
      $this->DrivingLicenceID = $DrivingLicenceID;
    }

    /**
     * @return int
     */
    public function getDrivingLicenceID()
    {
      return $this->DrivingLicenceID;
    }

    /**
     * @param int $DrivingLicenceID
     * @return \ArbetsformedlingenWsTaxonomi\DrivingLicence
     */
    public function setDrivingLicenceID($DrivingLicenceID)
    {
      $this->DrivingLicenceID = $DrivingLicenceID;
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
     * @return \ArbetsformedlingenWsTaxonomi\DrivingLicence
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ArbetsformedlingenWsTaxonomi\DrivingLicence
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrivingLicenceCode()
    {
      return $this->DrivingLicenceCode;
    }

    /**
     * @param string $DrivingLicenceCode
     * @return \ArbetsformedlingenWsTaxonomi\DrivingLicence
     */
    public function setDrivingLicenceCode($DrivingLicenceCode)
    {
      $this->DrivingLicenceCode = $DrivingLicenceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param string $SortOrder
     * @return \ArbetsformedlingenWsTaxonomi\DrivingLicence
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
