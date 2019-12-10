<?php

namespace ArbetsformedlingenWsTaxonomi;

class PostLocality
{

    /**
     * @var int $PostLocalityID
     */
    protected $PostLocalityID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $PostLocalityID
     */
    public function __construct($PostLocalityID)
    {
      $this->PostLocalityID = $PostLocalityID;
    }

    /**
     * @return int
     */
    public function getPostLocalityID()
    {
      return $this->PostLocalityID;
    }

    /**
     * @param int $PostLocalityID
     * @return \ArbetsformedlingenWsTaxonomi\PostLocality
     */
    public function setPostLocalityID($PostLocalityID)
    {
      $this->PostLocalityID = $PostLocalityID;
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
     * @return \ArbetsformedlingenWsTaxonomi\PostLocality
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
