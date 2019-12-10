<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByPostLocality
{

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var int $postLocalityId
     */
    protected $postLocalityId = null;

    /**
     * @param int $languageId
     * @param int $postLocalityId
     */
    public function __construct($languageId, $postLocalityId)
    {
      $this->languageId = $languageId;
      $this->postLocalityId = $postLocalityId;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostLocality
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostLocalityId()
    {
      return $this->postLocalityId;
    }

    /**
     * @param int $postLocalityId
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByPostLocality
     */
    public function setPostLocalityId($postLocalityId)
    {
      $this->postLocalityId = $postLocalityId;
      return $this;
    }

}
