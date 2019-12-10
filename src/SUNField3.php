<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNField3
{

    /**
     * @var int $SUNField3ID
     */
    protected $SUNField3ID = null;

    /**
     * @var string $SUNField3Code
     */
    protected $SUNField3Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SUNField2ID
     */
    protected $SUNField2ID = null;

    /**
     * @param int $SUNField3ID
     * @param int $SUNField2ID
     */
    public function __construct($SUNField3ID, $SUNField2ID)
    {
      $this->SUNField3ID = $SUNField3ID;
      $this->SUNField2ID = $SUNField2ID;
    }

    /**
     * @return int
     */
    public function getSUNField3ID()
    {
      return $this->SUNField3ID;
    }

    /**
     * @param int $SUNField3ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNField3
     */
    public function setSUNField3ID($SUNField3ID)
    {
      $this->SUNField3ID = $SUNField3ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNField3Code()
    {
      return $this->SUNField3Code;
    }

    /**
     * @param string $SUNField3Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNField3
     */
    public function setSUNField3Code($SUNField3Code)
    {
      $this->SUNField3Code = $SUNField3Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNField3
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return int
     */
    public function getSUNField2ID()
    {
      return $this->SUNField2ID;
    }

    /**
     * @param int $SUNField2ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNField3
     */
    public function setSUNField2ID($SUNField2ID)
    {
      $this->SUNField2ID = $SUNField2ID;
      return $this;
    }

}
