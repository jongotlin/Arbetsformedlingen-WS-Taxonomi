<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNLevel2Custom
{

    /**
     * @var int $SUNLevel2ID
     */
    protected $SUNLevel2ID = null;

    /**
     * @var string $SUNLevel2Code
     */
    protected $SUNLevel2Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SUNLevel1ID
     */
    protected $SUNLevel1ID = null;

    /**
     * @param int $SUNLevel2ID
     * @param int $SUNLevel1ID
     */
    public function __construct($SUNLevel2ID, $SUNLevel1ID)
    {
      $this->SUNLevel2ID = $SUNLevel2ID;
      $this->SUNLevel1ID = $SUNLevel1ID;
    }

    /**
     * @return int
     */
    public function getSUNLevel2ID()
    {
      return $this->SUNLevel2ID;
    }

    /**
     * @param int $SUNLevel2ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel2
     */
    public function setSUNLevel2ID($SUNLevel2ID)
    {
      $this->SUNLevel2ID = $SUNLevel2ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNLevel2Code()
    {
      return $this->SUNLevel2Code;
    }

    /**
     * @param string $SUNLevel2Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel2
     */
    public function setSUNLevel2Code($SUNLevel2Code)
    {
      $this->SUNLevel2Code = $SUNLevel2Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel2
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel2
     */
    public function setSUNLevel1ID($SUNLevel1ID)
    {
      $this->SUNLevel1ID = $SUNLevel1ID;
      return $this;
    }

}
