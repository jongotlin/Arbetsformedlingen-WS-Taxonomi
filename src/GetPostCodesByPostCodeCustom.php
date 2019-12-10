<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByPostCodeCustom
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var string $postCode
     */
    protected $postCode = null;

    /**
     * @param int $languageId
     * @param string $postCode
     */
    public function __construct($languageId, $postCode)
    {
      $this->languageId = $languageId;
      $this->postCode = $postCode;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
      return $this->languageId;
    }

    /**
     * @param int $languageId
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostCode
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostCode
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

}
