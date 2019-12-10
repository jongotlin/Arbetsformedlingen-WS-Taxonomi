<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNLevel3
{

    /**
     * @var int $SUNLevel3ID
     */
    protected $SUNLevel3ID = null;

    /**
     * @var string $SUNLevel3Code
     */
    protected $SUNLevel3Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SUNLevel2ID
     */
    protected $SUNLevel2ID = null;

    /**
     * @param int $SUNLevel3ID
     * @param int $SUNLevel2ID
     */
    public function __construct($SUNLevel3ID, $SUNLevel2ID)
    {
      $this->SUNLevel3ID = $SUNLevel3ID;
      $this->SUNLevel2ID = $SUNLevel2ID;
    }

    /**
     * @return int
     */
    public function getSUNLevel3ID()
    {
      return $this->SUNLevel3ID;
    }

    /**
     * @param int $SUNLevel3ID
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel3
     */
    public function setSUNLevel3ID($SUNLevel3ID)
    {
      $this->SUNLevel3ID = $SUNLevel3ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUNLevel3Code()
    {
      return $this->SUNLevel3Code;
    }

    /**
     * @param string $SUNLevel3Code
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel3
     */
    public function setSUNLevel3Code($SUNLevel3Code)
    {
      $this->SUNLevel3Code = $SUNLevel3Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel3
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
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
     * @return \ArbetsformedlingenWsTaxonomi\SUNLevel3
     */
    public function setSUNLevel2ID($SUNLevel2ID)
    {
      $this->SUNLevel2ID = $SUNLevel2ID;
      return $this;
    }

}
