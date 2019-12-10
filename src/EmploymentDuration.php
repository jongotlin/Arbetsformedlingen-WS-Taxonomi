<?php

namespace ArbetsformedlingenWsTaxonomi;

class EmploymentDuration
{

    /**
     * @var int $EmploymentDurationID
     */
    protected $EmploymentDurationID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $EURESCode
     */
    protected $EURESCode = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $EmploymentDurationID
     * @param int $SortOrder
     */
    public function __construct($EmploymentDurationID, $SortOrder)
    {
      $this->EmploymentDurationID = $EmploymentDurationID;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return int
     */
    public function getEmploymentDurationID()
    {
      return $this->EmploymentDurationID;
    }

    /**
     * @param int $EmploymentDurationID
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentDuration
     */
    public function setEmploymentDurationID($EmploymentDurationID)
    {
      $this->EmploymentDurationID = $EmploymentDurationID;
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
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentDuration
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getEURESCode()
    {
      return $this->EURESCode;
    }

    /**
     * @param string $EURESCode
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentDuration
     */
    public function setEURESCode($EURESCode)
    {
      $this->EURESCode = $EURESCode;
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
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentDuration
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
