<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNField2Custom
{

    /**
     * @var int $SUNField2ID
     */
    protected $SUNField2ID = null;

    /**
     * @var string $SUNField2Code
     */
    protected $SUNField2Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SUNField1ID
     */
    protected $SUNField1ID = null;

    /**
     * @param int $SUNField2ID
     * @param int $SUNField1ID
     */
    public function __construct($SUNField2ID, $SUNField1ID)
    {
      $this->SUNField2ID = $SUNField2ID;
      $this->SUNField1ID = $SUNField1ID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNField2
     */
    public function setSUNField2ID($SUNField2ID)
    {
      $this->SUNField2ID = $SUNField2ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNField2Code()
    {
      return $this->SUNField2Code;
    }

    /**
     * @param string $SUNField2Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNField2
     */
    public function setSUNField2Code($SUNField2Code)
    {
      $this->SUNField2Code = $SUNField2Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNField2
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNField2
     */
    public function setSUNField1ID($SUNField1ID)
    {
      $this->SUNField1ID = $SUNField1ID;
      return $this;
    }

}
