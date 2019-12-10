<?php

namespace ArbetsformedlingenWsTaxonomi;

class MunicipalityHomePageCustom
{

    /**
     * @var int $MunicipalityID
     */
    protected $MunicipalityID = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @param int $MunicipalityID
     */
    public function __construct($MunicipalityID)
    {
      $this->MunicipalityID = $MunicipalityID;
    }

    /**
     * @return int
     */
    public function getMunicipalityID()
    {
      return $this->MunicipalityID;
    }

    /**
     * @param int $MunicipalityID
     * @return \ArbetsformedlingenWsTaxonomi\MunicipalityHomePage
     */
    public function setMunicipalityID($MunicipalityID)
    {
      $this->MunicipalityID = $MunicipalityID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \ArbetsformedlingenWsTaxonomi\MunicipalityHomePage
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}
