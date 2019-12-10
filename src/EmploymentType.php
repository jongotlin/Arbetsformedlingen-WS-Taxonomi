<?php

namespace ArbetsformedlingenWsTaxonomi;

class EmploymentType
{

    /**
     * @var int $EmploymentTypeID
     */
    protected $EmploymentTypeID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $EmploymentTypeID
     * @param int $SortOrder
     */
    public function __construct($EmploymentTypeID, $SortOrder)
    {
      $this->EmploymentTypeID = $EmploymentTypeID;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return int
     */
    public function getEmploymentTypeID()
    {
      return $this->EmploymentTypeID;
    }

    /**
     * @param int $EmploymentTypeID
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentType
     */
    public function setEmploymentTypeID($EmploymentTypeID)
    {
      $this->EmploymentTypeID = $EmploymentTypeID;
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
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentType
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
     * @return \ArbetsformedlingenWsTaxonomi\EmploymentType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
