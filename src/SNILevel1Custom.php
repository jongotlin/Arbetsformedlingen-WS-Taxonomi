<?php

namespace ArbetsformedlingenWsTaxonomi;

class SNILevel1Custom
{

    /**
     * @var int $SNILevel1ID
     */
    protected $SNILevel1ID = null;

    /**
     * @var string $SNILevel1Code
     */
    protected $SNILevel1Code = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $SNILevel1ID
     */
    public function __construct($SNILevel1ID)
    {
      $this->SNILevel1ID = $SNILevel1ID;
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
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel1
     */
    public function setSNILevel1ID($SNILevel1ID)
    {
      $this->SNILevel1ID = $SNILevel1ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSNILevel1Code()
    {
      return $this->SNILevel1Code;
    }

    /**
     * @param string $SNILevel1Code
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel1
     */
    public function setSNILevel1Code($SNILevel1Code)
    {
      $this->SNILevel1Code = $SNILevel1Code;
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
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel1
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
     * @return \ArbetsformedlingenWsTaxonomi\SNILevel1
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
