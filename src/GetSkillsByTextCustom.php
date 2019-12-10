<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSkillsByTextCustom
{

    /**
     * @var string $term
     */
    protected $term = null;

    /**
     * @var int $languageId
     */
    protected $languageId = null;

    /**
     * @var boolean $exactMatch
     */
    protected $exactMatch = null;

    /**
     * @param string $term
     * @param int $languageId
     * @param boolean $exactMatch
     */
    public function __construct($term, $languageId, $exactMatch)
    {
      $this->term = $term;
      $this->languageId = $languageId;
      $this->exactMatch = $exactMatch;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->term;
    }

    /**
     * @param string $term
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByText
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
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
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByText
     */
    public function setLanguageId($languageId)
    {
      $this->languageId = $languageId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExactMatch()
    {
      return $this->exactMatch;
    }

    /**
     * @param boolean $exactMatch
     * @return \ArbetsformedlingenWsTaxonomi\GetSkillsByText
     */
    public function setExactMatch($exactMatch)
    {
      $this->exactMatch = $exactMatch;
      return $this;
    }

}
