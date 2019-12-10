<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNLevel1Custom
{

    /**
     * @var int $SUNLevel1ID
     */
    protected $SUNLevel1ID = null;

    /**
     * @var string $SUNLevel1Code
     */
    protected $SUNLevel1Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $SUNLevel1ID
     */
    public function __construct($SUNLevel1ID)
    {
      $this->SUNLevel1ID = $SUNLevel1ID;
    }

    /**
     * @return int
     */
    public function getSUNLevel1ID()
    {
      return $this->SUNLevel1ID;
    }

    /**
     * @param int $SUNLevel1ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel1
     */
    public function setSUNLevel1ID($SUNLevel1ID)
    {
      $this->SUNLevel1ID = $SUNLevel1ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNLevel1Code()
    {
      return $this->SUNLevel1Code;
    }

    /**
     * @param string $SUNLevel1Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel1
     */
    public function setSUNLevel1Code($SUNLevel1Code)
    {
      $this->SUNLevel1Code = $SUNLevel1Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel1
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
