<?php

namespace ArbetsformedlingenWsTaxonomi;

class JobSituation
{

    /**
     * @var string $JobSituation_AISID
     */
    protected $JobSituation_AISID = null;

    /**
     * @var string $JobSituation_AIS
     */
    protected $JobSituation_AIS = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $SortOrder
     */
    public function __construct($SortOrder)
    {
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return string
     */
    public function getJobSituation_AISID()
    {
      return $this->JobSituation_AISID;
    }

    /**
     * @param string $JobSituation_AISID
     * @return \ArbetsformedlingenWsTaxonomi\JobSituation
     */
    public function setJobSituation_AISID($JobSituation_AISID)
    {
      $this->JobSituation_AISID = $JobSituation_AISID;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobSituation_AIS()
    {
      return $this->JobSituation_AIS;
    }

    /**
     * @param string $JobSituation_AIS
     * @return \ArbetsformedlingenWsTaxonomi\JobSituation
     */
    public function setJobSituation_AIS($JobSituation_AIS)
    {
      $this->JobSituation_AIS = $JobSituation_AIS;
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
     * @return \ArbetsformedlingenWsTaxonomi\JobSituation
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param int $SortOrder
     * @return \ArbetsformedlingenWsTaxonomi\JobSituation
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
