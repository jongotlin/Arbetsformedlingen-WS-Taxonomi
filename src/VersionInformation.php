<?php

namespace ArbetsformedlingenWsTaxonomi;

class VersionInformation
{

    /**
     * @var int $VersionId
     */
    protected $VersionId = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var int $Systemtyp
     */
    protected $Systemtyp = null;

    /**
     * @var string $Beskrivning
     */
    protected $Beskrivning = null;

    /**
     * @var \DateTime $Skapad
     */
    protected $Skapad = null;

    /**
     * @var string $Signatur
     */
    protected $Signatur = null;

    /**
     * @var int $BastaxonomiId
     */
    protected $BastaxonomiId = null;

    /**
     * @var string $Bastaxonominamn
     */
    protected $Bastaxonominamn = null;

    /**
     * @param int $VersionId
     * @param int $Systemtyp
     * @param \DateTime $Skapad
     * @param int $BastaxonomiId
     */
    public function __construct($VersionId, $Systemtyp, \DateTime $Skapad, $BastaxonomiId)
    {
      $this->VersionId = $VersionId;
      $this->Systemtyp = $Systemtyp;
      $this->Skapad = $Skapad->format(\DateTime::ATOM);
      $this->BastaxonomiId = $BastaxonomiId;
    }

    /**
     * @return int
     */
    public function getVersionId()
    {
      return $this->VersionId;
    }

    /**
     * @param int $VersionId
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setVersionId($VersionId)
    {
      $this->VersionId = $VersionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return int
     */
    public function getSystemtyp()
    {
      return $this->Systemtyp;
    }

    /**
     * @param int $Systemtyp
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setSystemtyp($Systemtyp)
    {
      $this->Systemtyp = $Systemtyp;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeskrivning()
    {
      return $this->Beskrivning;
    }

    /**
     * @param string $Beskrivning
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setBeskrivning($Beskrivning)
    {
      $this->Beskrivning = $Beskrivning;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSkapad()
    {
      if ($this->Skapad == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Skapad);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Skapad
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setSkapad(\DateTime $Skapad)
    {
      $this->Skapad = $Skapad->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatur()
    {
      return $this->Signatur;
    }

    /**
     * @param string $Signatur
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setSignatur($Signatur)
    {
      $this->Signatur = $Signatur;
      return $this;
    }

    /**
     * @return int
     */
    public function getBastaxonomiId()
    {
      return $this->BastaxonomiId;
    }

    /**
     * @param int $BastaxonomiId
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setBastaxonomiId($BastaxonomiId)
    {
      $this->BastaxonomiId = $BastaxonomiId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBastaxonominamn()
    {
      return $this->Bastaxonominamn;
    }

    /**
     * @param string $Bastaxonominamn
     * @return \ArbetsformedlingenWsTaxonomi\VersionInformation
     */
    public function setBastaxonominamn($Bastaxonominamn)
    {
      $this->Bastaxonominamn = $Bastaxonominamn;
      return $this;
    }

}
