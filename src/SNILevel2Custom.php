<?php

namespace ArbetsformedlingenWsTaxonomi;

class SNILevel2Custom
{

    /**
     * @var int $SNILevel2ID
     */
    protected $SNILevel2ID = null;

    /**
     * @var string $SNILevel2Code
     */
    protected $SNILevel2Code = null;

    /**
     * @var int $SNILevel1ID
     */
    protected $SNILevel1ID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $SNILevel2ID
     * @param int $SNILevel1ID
     */
    public function __construct($SNILevel2ID, $SNILevel1ID)
    {
      $this->SNILevel2ID = $SNILevel2ID;
      $this->SNILevel1ID = $SNILevel1ID;
    }

    /**
     * @return int
     */
    public function getSNILevel2ID()
    {
      return $this->SNILevel2ID;
    }

    /**
     * @param int $SNILevel2ID
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel2
     */
    public function setSNILevel2ID($SNILevel2ID)
    {
      $this->SNILevel2ID = $SNILevel2ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSNILevel2Code()
    {
      return $this->SNILevel2Code;
    }

    /**
     * @param string $SNILevel2Code
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel2
     */
    public function setSNILevel2Code($SNILevel2Code)
    {
      $this->SNILevel2Code = $SNILevel2Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getSNILevel1ID()
    {
      return $this->SNILevel1ID;
    }

    /**
     * @param int $SNILevel1ID
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel2
     */
    public function setSNILevel1ID($SNILevel1ID)
    {
      $this->SNILevel1ID = $SNILevel1ID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel2
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel2
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
