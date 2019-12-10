<?php

namespace ArbetsformedlingenWsTaxonomi;

class AFOfficeCustom
{

    /**
     * @var string $OfficeCode
     */
    protected $OfficeCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AddressVisitor
     */
    protected $AddressVisitor = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $PostLocality
     */
    protected $PostLocality = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var int $LanID
     */
    protected $LanID = null;

    /**
     * @var string $Other
     */
    protected $Other = null;

    /**
     * @var boolean $Removed
     */
    protected $Removed = null;

    /**
     * @var \DateTime $Changed
     */
    protected $Changed = null;

    /**
     * @param int $LanID
     * @param boolean $Removed
     * @param \DateTime $Changed
     */
    public function __construct($LanID, $Removed, \DateTime $Changed)
    {
      $this->LanID = $LanID;
      $this->Removed = $Removed;
      $this->Changed = $Changed->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getOfficeCode()
    {
      return $this->OfficeCode;
    }

    /**
     * @param string $OfficeCode
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setOfficeCode($OfficeCode)
    {
      $this->OfficeCode = $OfficeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressVisitor()
    {
      return $this->AddressVisitor;
    }

    /**
     * @param string $AddressVisitor
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setAddressVisitor($AddressVisitor)
    {
      $this->AddressVisitor = $AddressVisitor;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostLocality()
    {
      return $this->PostLocality;
    }

    /**
     * @param string $PostLocality
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setPostLocality($PostLocality)
    {
      $this->PostLocality = $PostLocality;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
      return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return int
     */
    public function getLanID()
    {
      return $this->LanID;
    }

    /**
     * @param int $LanID
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setLanID($LanID)
    {
      $this->LanID = $LanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOther()
    {
      return $this->Other;
    }

    /**
     * @param string $Other
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setOther($Other)
    {
      $this->Other = $Other;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoved()
    {
      return $this->Removed;
    }

    /**
     * @param boolean $Removed
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setRemoved($Removed)
    {
      $this->Removed = $Removed;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getChanged()
    {
      if ($this->Changed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Changed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Changed
     * @return \ArbetsformedlingenWsTaxonomi\AFOffice
     */
    public function setChanged(\DateTime $Changed)
    {
      $this->Changed = $Changed->format(\DateTime::ATOM);
      return $this;
    }

}
