<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNField1
{

    /**
     * @var int $SUNField1ID
     */
    protected $SUNField1ID = null;

    /**
     * @var string $SUNField1Code
     */
    protected $SUNField1Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @param int $SUNField1ID
     */
    public function __construct($SUNField1ID)
    {
      $this->SUNField1ID = $SUNField1ID;
    }

    /**
     * @return int
     */
    public function getSUNField1ID()
    {
      return $this->SUNField1ID;
    }

    /**
     * @param int $SUNField1ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNField1
     */
    public function setSUNField1ID($SUNField1ID)
    {
      $this->SUNField1ID = $SUNField1ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNField1Code()
    {
      return $this->SUNField1Code;
    }

    /**
     * @param string $SUNField1Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNField1
     */
    public function setSUNField1Code($SUNField1Code)
    {
      $this->SUNField1Code = $SUNField1Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNField1
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
