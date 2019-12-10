<?php

namespace ArbetsformedlingenWsTaxonomi;

class ContinentCustom
{

    /**
     * @var int $ContinentID
     */
    protected $ContinentID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $ContinentID
     */
    public function __construct($ContinentID)
    {
      $this->ContinentID = $ContinentID;
    }

    /**
     * @return int
     */
    public function getContinentID()
    {
      return $this->ContinentID;
    }

    /**
     * @param int $ContinentID
     * @return \ArbetsformedlingenWsTaxonomi\Continent
     */
    public function setContinentID($ContinentID)
    {
      $this->ContinentID = $ContinentID;
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
     * @return \ArbetsformedlingenWsTaxonomi\Continent
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
